<?php
$registrasi=mysql_fetch_array(mysql_query("SELECT * FROM registrasi WHERE NO_REGIS='".$_GET['no_regis']."'"));  
$query=mysql_query("SELECT * FROM peserta WHERE NIK='".$registrasi['NIK']."'");
$data=mysql_fetch_array($query);

?>
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=pendaftaran" title="pergi ke pendaftaran" class="tip-bottom">pendaftaran</a>
   <a href="index.php?page=edit_pendaftaran" title="pergi ke tambah pendaftaran" class="tip-bottom"> Edit pendaftaran</a>
   </div>
   <center>
   <h2>EDIT Pendaftaran</h2>
   <h3>No REGISTRASI <?php echo $_GET['no_regis'];?></h3>
  </center>
  </div>
       <div class="container-fluid">
       <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-content">
                   <form action="" method="post" enctype='multipart/form-data' class="form-horizontal">
                   <div class="control-group">
                   <label class="control-label">NIK</label>
                   <div class="controls">
                    <input type="hidden" class="span11" name="no_regis" value="<?php echo $_GET['no_regis'];?>">
                    <input type="hidden" class="span11" name="nik_awal" value="<?php echo $data['NIK'];?>">
                    <input type="text" class="span11" name="nik" value="<?php echo $data['NIK'];?>">
                   </div>
                   </div>
                        <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                <input type="text" class="span11" name="nama" placeholder="Nama" id="nama" 
                                value="<?php echo $data['NAMA'];?>">
                            </div>
                        </div>
                        <div class="control-group">
                <label class="control-label">Alamat</label>
                <div class="controls">
                  <textarea class="span11" name="alamat" value="<?php echo $data['ALAMAT'];?>"> <?php echo $data['ALAMAT'];?></textarea>
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">No Telepon</label>
                <div class="controls">
                  <input type="text" class="span11" name="no_tlp" id="no_tlp" value="<?php echo $data['NO_TELEPON'];?>">>
                </div>
              </div>
 <div class="control-group">
 <?php $jk=$data['JENIS_KELAMIN'];
if($jk="L"){
  echo"
              <label class='control-label'>Jenis Kelamin</label>
              <div class='controls'>
                <label>
                  <input type='radio' name='jk' id='jk' Value='L' checked />
                  Laki-Laki</label>
                <label>
                  <input type='radio' name='jk' id='jk' Value='P'/>
                  Perempuan</label>
              </div>
           
            ";
          }
            else{echo"

 <label class='control-label'>Jenis Kelamin</label>
              <div class='controls'>
                <label>
                  <input type='radio' name='jk' id='jk' Value='L' />
                  Laki-Laki</label>
                <label>
                  <input type='radio' name='jk' id='jk' Value='P'  checked/>
                  Perempuan</label>
              </div>
";
            }
            ?>
             </div>

              <div class="control-group">
     <label class="control-label">email</label>
            <div class="controls">
                                <input type="input" class="span11" placeholder="email" id="email" name="email" value="<?php echo $data['EMAIL']; ?>">
                            </div>
                        </div>
                        <div class="control-group">       
                        <label class="control-label">Pas Photo</label>                                  
                        <div class="controls">
                            <input type="file" class="form-control" name='photo' id="photo" placeholder="pilih pas foto" value="<?php echo $data['PHOTO']; ?>">
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
                <input id="tanggal" type="date" class="datepicker span11"name="tanggal_lahir" value="<?php echo $data['TANGGAL_LAHIR'];?>">
   </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Data Valid ?</label>
              <div class='controls'>

            <?php 


            if($registrasi['KONFIRMASI'] =='1'){

              echo" 
                <label>
                  <input type='radio' name='valid' id='valid' Value='1' checked />
                  Valid</label>
                <label>
                  <input type='radio' name='valid' id='valid' Value='2'/>
                  Tidak Valid</label>
              ";
            }
           if($registrasi['KONFIRMASI'] =='2'){
              echo" <label>
                  <input type='radio' name='valid' id='valid' Value='1'  />
                  Valid</label>
                <label>
                  <input type='radio' name='valid' id='valid' Value='2' checked/>
                  Tidak Valid</label>
              ";
            }
            if($registrasi['KONFIRMASI'] =='0'){
             echo" <label>
                  <input type='radio' name='valid' id='valid' Value='1'  />
                  Valid</label>
                <label>
                  <input type='radio' name='valid' id='valid' Value='2' />
                  Tidak Valid</label>
               ";
            }

            ?>
            

            </div>
            </div>
                        <br>
                        <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="ubah">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        </div>

<?php
include("../config/connect.php");
    if(isset($_POST['ubah'])){
        $no_regis=$_POST['no_regis'];
        $nik=$_POST['nik'];
        $nik_awal=$_POST['nik_awal'];
        $nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$jenis_kelamin=$_POST['jk'];
$valid=$_POST['valid'];
$tanggal_lahir=jin_date_sql($_POST['tanggal_lahir']);

// BUAT FOLDER SESUAI NOMOR PENDAFTAR
    if(!is_dir("../peserta/image/data_pendaftar/".$no_regis)){
        mkdir("../pesertaimage/data_pendaftar/".$no_regis);
    }else{
        $uploadDir = "../peserta/image/data_pendaftar/".$no_regis."/";
    }
// UPLOAD GAMBAR
    $uploadDir = "../peserta/image/data_pendaftar/".$no_regis."/";

    $photo = $no_regis."_".$_FILES['photo']['name'];
    $ktp = $no_regis."_".$_FILES['ktp']['name'];

    $upload_photo = move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir.$photo);
    $upload_ktp = move_uploaded_file($_FILES['ktp']['tmp_name'], $uploadDir.$ktp);



   //update k tabel peserta
    $delete2=mysql_query("DELETE FROM peserta WHERE NIK='$nik_awal'");
$query2="INSERT INTO peserta(NIK,NAMA,ALAMAT,JENIS_KELAMIN,NO_TELEPON,TANGGAL_LAHIR,EMAIL,PHOTO,PHOTO_KTP) VALUES('$nik','$nama','$alamat','$jenis_kelamin','$no_tlp','$tanggal_lahir','$email','$photo','$ktp')"; $exec_p=mysql_query($query2)or die('error :'. mysqli_error($query2));
 $query3="UPDATE registrasi SET NIK='$nik', KONFIRMASI='$valid' WHERE NO_REGIS='$no_regis'";
$exec_r=mysql_query($query3)or die('error :'. mysqli_error($query3));

if( $exec_p){
    
            
            echo"   <script language='javascript'>
                            alert('Data Berhasil diubah');
                           document.location.href='index.php?page=pendaftaran'
                        </script>   
                ";
            }else{
             echo"<script language='javascript'>
                       alert('Gagal');
                       document.location.href='index.php?page=pendaftaran'
                    </script> ";
            }   
        }
?>
