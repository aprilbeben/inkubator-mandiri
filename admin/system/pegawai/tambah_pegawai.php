<div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_pegawai" title="pergi ke pendaftaran" class="tip-bottom">pegawai</a>
   <a href="index.php?page=tambah_pegawai" title="pergi ke tambah pendaftaran" class="tip-bottom"> Tambah pegawai</a>
   </div>
  </div>
    <div class="container-fluid">
       <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Tambah Pegawai</h5>
          </div>
          <div class="widget-content">
                   <form action="" method="post" enctype='multipart/form-data' class="form-horizontal">
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
                  <input type="radio" name="jenis_kelamin" id="jk" Value="P"/>
                  Perempuan</label>
              </div>
            </div>        

             <div class="control-group">
                <label class="control-label">Jabatan</label>
                <div class="controls">
                  <select name="jabatan">
                  <option value="manajer">Manajer</option>
                  <option value="humas">humas</option>
                  <option value="surveyor">Surveyor</option>
                  </select>
                </div>
              </div>
                        <br>
                        <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                            </div>
                    </form>
</div>
                </div>

            </div>
            </div>
        </div>
   
<?php
    if(isset($_POST['simpan'])){
        
        $nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$jabatan=$_POST['jabatan'];
$tanggal=date("Y-m-d");
$kode_jabatan='';
$level="";
if($jabatan=="manajer"){
  $kode_jabatan="MAN";
  $level=1;
}
if($jabatan=="humas"){
  $kode_jabatan="HUM";
  $level=2;
}
if($jabatan=="surveyor"){
  $kode_jabatan="SUR";
  $level=3;
}

    //KODE OTOMATIS
    $nourut = mysql_query("SELECT ID_PEGAWAI FROM pegawai ORDER BY ID_PEGAWAI DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['ID_PEGAWAI'],9,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
    $c=$kode;
    $id_pegawai="PEG"."-".$kode_jabatan."-".$c;
    $password=md5($jabatan);

$query2="INSERT INTO pegawai(ID_PEGAWAI,NAMA,ALAMAT,JENIS_KELAMIN,NO_TELEPON,JABATAN) VALUES('$id_pegawai','$nama','$alamat','$jenis_kelamin','$no_tlp','$jabatan')";

$query="INSERT INTO `user`(USERNAME,PASSWORD,LEVEL,ID_PEGAWAI)  VALUES('$id_pegawai','$password','$level','$id_pegawai')";
   //insert k tabel registrasi

  
 $exec_p=mysql_query($query2)or die('error :'. mysqli_error($query2));
  $exec_r= mysql_query($query)or die(mysqli_error());

if( $exec_r AND $exec_p){
    
            


    echo "  <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            document.location.href='index.php?page=data_pegawai';
                        </script>   ";
               // 

           } 
            
            
            else{
             echo"<script language='javascript'>
                       alert('Gagal');
                    </script> ";
            }   
        }
?>
