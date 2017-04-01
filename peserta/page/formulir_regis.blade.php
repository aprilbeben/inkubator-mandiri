<script>
function popup(url) 
                    {
                     params  = 'fullscreen=yes';
                    

                     newwin=window.open(url,'windowname4', params);
                     if (window.focus) {newwin.focus()}
                     return false;
                    }
</script>

<script language='javascript'>
function validAngka(a)
{
    if(!/^[0-9.]+$/.test(a.value))
    {
    a.value = a.value.substring(0,a.value.length-1000);
    }
}
</script>

<div class="portfolio-modal modal fade" id="daftarModal" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>FORM PENDAFTARAN</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                   <form action="" method="post" enctype='multipart/form-data'>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls" align="left">
                                <label>NIK/ No KTP</label>
                                <input type="text" class="form-control" name="nik" onkeyup="validAngka(this)" placeholder="NO KTP" id="nik" required data-validation-required-message="tolong isi nama anda">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group col-xs-12 controls" align="left">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama" required data-validation-required-message="tolong isi nama anda">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12  controls" align="left">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" required data-validation-required-message="tolong isi alamat anda."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls" align="left">
                                <label>No Telepon</label>
                                <input type="number" class="form-control" onkeyup="validAngka(this)" placeholder="No Telepon" name="no_tlp" id="no_tlp" required data-validation-required-message="Tolong Isi No Telepon Anda.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group-value controls" align="left">
                                <label>Jenis Kelamin</label>
                                </div>
                                <div class="form-group col-xs-12 floating-label-form-group-value controls" align="left">
                                <label>
                                <input type="radio" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="L" selected>
                                Laki-Laki</label>  &nbsp&nbsp&nbsp
                                
                                <label>
                                <input type="radio" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="
                                P">
                                Perempuan</label>
                                <p class="help-block text-danger"></p>
                        </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group-value controls" align="left">
                                <label>Tanggal Lahir</label>
                                <input type="input" class="form-control"  placeholder="tanggal lahir" id="tanggal" name="tanggal_lahir" required data-validation-required-message="Tolong Isi Umur Anda">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group-value controls" align="left">
                                <label>email</label>
                                <input type="input" class="form-control"  placeholder="email" id="tanggal" name="email" required data-validation-required-message="Tolong email anda">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">                                         
                        <div class="form-group col-xs-12 floating-label-form-group-value controls" align="left">
                        <label class="control-label">Pas Photo</label>
                            <input type="file" class="form-control" name='photo' id="photo" placeholder="pilih pas foto">
                            <!--<p class="help-block">* Wajib di isi</p>-->
                        </div>              
                    </div>
                    <div class="row control-group">                                         
                        <div class="form-group col-xs-12 floating-label-form-group-value controls" align="left">
                        <label class="control-label">Foto KTP</label>
                            <input type="file" class="form-control" name='ktp' id="ktp" placeholder="pilih pas foto">
                            <!--<p class="help-block">* Wajib di isi</p>-->
                        </div>              
                    </div>

                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg" name="daftar">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php
mysql_connect("localhost","root","");
mysql_select_db("db_inkubator");
function tahun_ajar($date){
    $tanggal = date("y", strtotime($date));
    return $tanggal;
}
?>
<?php
    if(isset($_POST['daftar'])){
        $nik=$_POST['nik'];
        $email=$_POST['email'];
        $nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_tlp=$_POST['no_tlp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=jin_date_sql($_POST['tanggal_lahir']);
$tanggal=date("Y-m-d");
$konfirmasi='0';
$status_wawancara='0';


  if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix ",$email))    { 
            echo "<script>alert('Alamat email yang dimasukkan tidak valid')</script>";
    } 
    else{ 

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
    if(!is_dir("image/data_pendaftar/".$noregis)){
        mkdir("image/data_pendaftar/".$noregis);
    }else{
        //echo "folder Exist";
    }
// UPLOAD GAMBAR
    $uploadDir = "image/data_pendaftar/".$noregis."/";

    $photo = $noregis."_".$_FILES['photo']['name'];
    $ktp = $noregis."_".$_FILES['ktp']['name'];

    $upload_photo = move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir.$photo);
    $upload_ktp = move_uploaded_file($_FILES['ktp']['tmp_name'], $uploadDir.$ktp);

    if($upload_photo AND $upload_ktp){
   
$query2="INSERT INTO peserta(NIK,NAMA,ALAMAT,JENIS_KELAMIN,NO_TELEPON,TANGGAL_LAHIR,EMAIL,PHOTO,PHOTO_KTP) VALUES('$nik','$nama','$alamat','$jenis_kelamin','$no_tlp','$tanggal_lahir','$email','$photo','$ktp')";

$query="INSERT INTO `registrasi`(NO_REGIS,ID_REGULASI,NIK,TANGGAL_REGISTRASI,KONFIRMASI,STATUS_WAWANCARA)  VALUES('$noregis','$id_regulasi','$nik','$tanggal','$konfirmasi','$status_wawancara')";
   //insert k tabel registrasi

  
 $exec_p=mysql_query($query2)or die('error :'. mysqli_error());
  $exec_r= mysql_query($query)or die(mysqli_error());

if( $exec_r AND $exec_p){
    
            

include "page/fungsi_sendmail.php";
 
$to       = $_POST['email'];
$subject  = 'REGISTRASI INKUBATOR MANDIRI';
$message  = 'dear Bpk/Ibu '.$nama.', terimakasih telah melakukan pendaftaran seleksi pelatihan di Inkubator Mandiri, data anda sedang di proses oleh Admin silahkan tunggu email berikutnya untuk mendapatkan Kartu Undangan Wawancara....terimakasih,   ';
 
// user dan password gmail
$sender   = 'inkubatormandiri@gmail.com';
$password = 'loop12345';
 
if(email_localhost($to, $subject, $message, $sender, $password)){
    echo "  <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            document.location.href='index.php';
                        </script>   ";
}
               // popup('page/cetak_kartu_wawancara.php?daftar=".$noregis."');

            
            
            
            else{
             echo"<script language='javascript'>
                       alert('Gagal');
                    </script> ";
            }   
        }

    }
    else{
             echo"<script language='javascript'>
                       alert('Gagal');
                    </script> ";
            }   
}
}
?>
