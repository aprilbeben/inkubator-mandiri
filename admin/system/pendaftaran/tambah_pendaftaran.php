<script>
function popup(url) 
                    {
                     params  = 'fullscreen=yes';
                    

                     newwin=window.open(url,'windowname4', params);
                     if (window.focus) {newwin.focus()}
                     return false;
                    }
</script>
<div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=pendaftaran" title="pergi ke pendaftaran" class="tip-bottom">pendaftaran</a>
   <a href="index.php?page=tambah_pendaftaran" title="pergi ke tambah pendaftaran" class="tip-bottom"> Tambah pendaftaran</a>
   </div>
   
   <h1>Form Pendaftaran</h1>
  </div>
    <div class="container-fluid">
       <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>FORM pendaftaran</h5>
          </div>
          <div class="widget-content">
<?php
$query ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql = mysql_query($query);
  $data = mysql_fetch_array($sql);
  $tahun=$data['ID_REGULASI'];
  
  $regis = mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$tahun' AND KONFIRMASI='1';");
  $n_regis = mysql_num_rows($regis);

$tanggal_sekarang=date("Y-m-d");
          $p_awal=$data['PENDAFTARAN_AWAL'];
          $p_akhir=$data['PENDAFTARAN_AKHIR'];
          $tahun=$data['TAHUN'];
          $semester=$data['SEMESTER'];
          $sisa_kuota=$data['KUOTA']-$n_regis;
          if($data['STATUS_PENDAFTARAN']=='0' or $tanggal_sekarang<$p_awal){
          echo "
          <div class='error_ex'>
          <h3 style='color:red;'>Pendaftaran Pelatihan Belum Di buka</h3>
          </div>";
        }
        else if($sisa_kuota==0){
            echo "<div class='error_ex'><p align='center'>  Penerimaan Peserta Pelatihan Baru <b>Inkubator Mandiri</b> Periode Pelatihan : $tahun <b>
             </b> Semester <b> $semester</b> <br> <h3 style='color:red;'>kuota telah habis</h3></div>";  
          }
          else if($p_akhir < $tanggal_sekarang){
            echo "<div class='error_ex'><p align='center'>  Penerimaan Peserta Pelatihan Baru <b>Inkubator Mandiri</b> Periode Pelatihan : $tahun <b>
             </b> Semester <b> $semester</b> <br> <h3 style='color:red;'>Pendaftaran telah usai</h3></div>";

          }
          else { 

?>
     
                   <form action="" method="post" enctype='multipart/form-data' class="form-horizontal">
                    <div class="control-group">
              <label class="control-label">NIK</label>
              <div class="controls">
                <input type="text" id="nik"name="nik">
   </div>
            </div>
                        <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                <input type="text" class="span11" name="nama" placeholder="Nama" id="nama">
                            </div>
                        </div>
                        <div class="control-group">
                <label class="control-label">Alamat</label>
                <div class="controls">
                  <textarea class="span11" name="alamat"></textarea>
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">No Telepon</label>
                <div class="controls">
                  <input type="text" class="span11" name="no_tlp" id="no_tlp">
                </div>
              </div>
 <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="controls">
                <label>
                  <input type="radio" name="jenis_kelamin" id="jk" Value="L" selected />
                  Laki-Laki</label>
                <label>
                  <input type="radio" name="jenis_kelamink" id="jk" Value="P"/>
                  Perempuan</label>
              </div>
            </div>
     <div class="control-group">
     <label class="control-label">email</label>
            <div class="controls">
                                <input type="input" class="span11" placeholder="email" id="email" name="email">
                            </div>
                        </div>
                        <div class="control-group">       
                        <label class="control-label">Pas Photo</label>                                  
                        <div class="controls">
                            <input type="file" class="form-control" name='photo' id="photo" placeholder="pilih pas foto">
                            <!--<p class="help-block">* Wajib di isi</p>-->
                        </div>              
                    </div>
                    <div class="control-group">
                    <label class="control-label">Foto KTP</label>                                         
                        <div class="controls">
                            <input type="file" class="form-control" name='ktp' id="ktp" placeholder="pilih pas foto">
                            <!--<p class="help-block">* Wajib di isi</p>-->
                        </div>              
                    </div>

                        <div class="control-group">
              <label class="control-label">Tanggal Lahir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="tanggal_lahir">
   </div>
            </div>
           <div class="control-group">
              <label class="control-label">Data Valid ?</label>
              <div class="controls">
                <label>
                  <input type="radio" name="valid" id="jk" Value="1" selected />
                  Valid</label>
                <label>
                  <input type="radio" name="valid" id="jk" Value="2"/>
                  Tidak Valid</label>
              </div>
            </div>
            
                        <br>
                        <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="daftar">Simpan</button>
                            </div>
                    </form>
                     <?php
}
?>
</div>
                </div>

            </div>
            </div>
        </div>
   
<?php
    if(isset($_POST['daftar'])){
        $nik=$_POST['nik'];
        $email=$_POST['email'];
        $nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$valid=$_POST['valid'];
$tanggal_lahir=jin_date_sql($_POST['tanggal_lahir']);
$tanggal=date("Y-m-d");
$status_wawancara='0';

    //KODE OTOMATIS
    $nourut = mysql_query("SELECT NO_REGIS FROM registrasi ORDER BY NO_REGIS DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['NO_REGIS'],11,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
    $c=$kode;
    $regul=mysql_query('SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)');
    $data_regul=mysql_fetch_array($regul);
    $id_regulasi=$data_regul['ID_REGULASI'];
    $thn_ajar = $data_regul['TAHUN'];
    $semester =$data_regul['SEMESTER'];
    $noregis = "REG"."-".$thn_ajar."-".$semester."-".$c;

// BUAT FOLDER SESUAI NOMOR PENDAFTAR
    if(!is_dir("../peserta/image/data_pendaftar/".$noregis)){
        mkdir("../peserta/image/data_pendaftar/".$noregis);
    }else{
        //echo "folder Exist";
    }
// UPLOAD GAMBAR
    $uploadDir = "../peserta/image/data_pendaftar/".$noregis."/";

    $photo = $noregis."_".$_FILES['photo']['name'];
    $ktp = $noregis."_".$_FILES['ktp']['name'];

    $upload_photo = move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir.$photo);
    $upload_ktp = move_uploaded_file($_FILES['ktp']['tmp_name'], $uploadDir.$ktp);

    if($upload_photo AND $upload_ktp){
   
$query2="INSERT INTO peserta(NIK,NAMA,ALAMAT,JENIS_KELAMIN,NO_TELEPON,TANGGAL_LAHIR,EMAIL,PHOTO,PHOTO_KTP) VALUES('$nik','$nama','$alamat','$jenis_kelamin','$no_tlp','$tanggal_lahir','$email','$photo','$ktp')";

$query="INSERT INTO `registrasi`(NO_REGIS,ID_REGULASI,NIK,TANGGAL_REGISTRASI,KONFIRMASI,STATUS_WAWANCARA)  VALUES('$noregis','$id_regulasi','$nik','$tanggal','$valid','$status_wawancara')";
   //insert k tabel registrasi

  
 $exec_p=mysql_query($query2)or die('error :'. mysqli_error());
  $exec_r= mysql_query($query)or die(mysqli_error());

if( $exec_r AND $exec_p){
    
            


    echo "  <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            document.location.href='index.php?page=pendaftaran';
                            popup('system/pendaftaran/cetak_kartu_wawancara.php?daftar=".$noregis."');
                        </script>   ";
               // 

           } 
            
            
            else{
             echo"<script language='javascript'>
                       alert('Gagal');
                    </script> ";
            }   
        }

    }
?>
