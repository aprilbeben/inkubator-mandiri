
<?php
   $query1 ="SELECT * FROM regulasi WHERE id_regulasi IN( SELECT MAX(id_regulasi) FROM regulasi)";
  $query1 ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
  $survey_awal=$data1['SURVEY_AWAL'];
  $survey_akhir=$data1['SURVEY_AKHIR'];
  $query=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE ID_PEGAWAI='".$_SESSION['id_pegawai']."'")); 
  $nama=$query['NAMA'];
  
  $kls = mysql_query("SELECT * FROM detail_kls WHERE STATUS_SUDAH_SURVEY='0' AND  ID_PEGAWAI='".$_SESSION['id_pegawai']."'");
  $n_kls = mysql_num_rows($kls);
  $sudah_survey=mysql_query("SELECT * FROM detail_kls WHERE STATUS_SUDAH_SURVEY='1' AND  ID_PEGAWAI='".$_SESSION['id']."'");
  $n_sudah_survey=mysql_num_rows($sudah_survey); 

      ?>

 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_survey" title="pergi ke data survey" class="tip-bottom">data Survey</a>
    <a href="index.php?page=tambah_survey" title="pergi ke tambah survey" class="tip-bottom"> Tambah Survey</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">FORM  SURVEY Tahun Pelatihan 
            <span style="color: red;"><?php echo $tahun;?></span> 
            Semester <span style="color: red;"><?php echo $semester;?></span> 
            </h3>
        <h4 align="center">
        Periode wawancara : <?php echo(DateToIndo($survey_awal));?> - <?php echo(DateToIndo($survey_akhir));?>  
        </h4>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Form Survey</h5>
          </div>
 <div class="widget-content">
            <form id="form-wizard" method="post" enctype="multipart/form-data" >
              <div id="form-wizard-1" class="step">
              <div class="control-group">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_cari_kls"><b>Cari Calon Peserta</b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button>
                <div class="controls">
                <table class="table">
            
                    <tr>
                      <td><center><b>NIK:</b></center></td>
                      <td><strong><input class="span8" type="hidden" name="kls" id="kls" readonly="readonly">
                      <input class="span8" type="text" name="nik" id="nik" readonly="readonly"></strong></td>
                    </tr>
                    <tr>
                    <tr>
                      <td><center><b>Nama:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="nama" id="nama" readonly="readonly"></td>
                    </tr>
                    <tr>
                      <td><center><b>Alamat</b></center></td>
                      <td><strong><textarea class="span8" name="alamat" id="alamat" readonly="readonly"></textarea></strong></td>
                    </tr>
                  <td><center><b>No Telepon:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="no_telepon" id="no_telepon" readonly="readonly"> </td>
                  </tr>
              
                  
                </table>
                </div>
              </div>
                </div>
               <div id="form-wizard-2" class="step">
                <div class="control-group">
                  <div class="controls">
                  <?php
                  include("system/survey/survey_wizard_angket.php");
                  ?>
                    </div>
                  
                </div>
              </div>
          

 <div id="form-wizard-3" class="step">
                <div class="control-group">
                <label class="controls-label" align="center"><h3>Profil Keluarga</h3></label>
                <a id="add_row" class="btn btn-success">Tambah Baris</a><a id='delete_row' class="btn btn-danger">Hapus Baris</a>
      
                  <div class="controls">
       <?php include("system/survey/survey_wizard_profil_keluarga.php");?>  
               </div>

                </div>
                </div>

                <div id="form-wizard-4" class="step">
                <div class="control-group">
                <label class="controls-label" align="center"><h3>Indeks Rumah</h3></label>
                  <div class="controls">
       <?php include("system/survey/survey_wizard_indeks_rumah.php");?>  
               </div>

                </div>
                </div>

                <div id="form-wizard-5" class="step">
                <div class="control-group">
                <label class="controls-label" align="center"><h3>Kepemilikan Harta</h3></label>
                  <div class="controls">
       <?php include("system/survey/survey_wizard_kepemilikan_harta.php");?>  
               </div>

                </div>
                </div>

                <div id="form-wizard-6" class="step">
                <div class="control-group">
                <label class="controls-label" align="center"><h3>Indeks Kedhuafaan</h3></label>
                  <div class="controls">
       <?php include("system/survey/survey_wizard_Indeks_kedhuafaan.php");?>  
               </div>

                </div>
                </div>
                
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" name="simpan" />
                <div id="status"></div>
              </div>
              <div id="submitted">
                <?php
    if(isset($_POST['simpan'])) {
        $nik=$_POST['nik'];
        $kls=$_POST['kls'];
        $id_pegawai=$_SESSION['username'];
$status_survey=1;
$status_lulus_survey=0;
$tanggal=date("Y-m-d");
    
    include("../config/connect.php");
    //KODE OTOMATIS
    $nourut = mysql_query("SELECT NO_SURVEY FROM survey ORDER BY NO_SURVEY DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['NO_SURVEY'],11,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
    $c=$kode;
   $regul=mysql_query('SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)');
  //data regulasi
    $data_regul=mysql_fetch_array($regul);
    $id_regulasi=$data_regul['ID_REGULASI'];
    $thn_ajar = $data_regul['TAHUN'];
    $semester =$data_regul['SEMESTER']; 
  
    
    $no_survey = "SUR"."-".$thn_ajar."-".$semester."-".$c;
    //data angket
    $jawaban[0]=$_POST['soal1'];
    $jawaban[1]=$_POST['soal2'];
    $jawaban[2]=$_POST['soal3'];
    $jawaban[3]=$_POST['soal4'];
    $jawaban[4]=$_POST['soal5'];
    $jawaban[5]=$_POST['alasan_soal5'];
    $jawaban[6]=$_POST['soal6'];
    $jawaban[7]=$_POST['soal7'];
    $jawaban[8]=$_POST['soal8'];
    $jawaban[9]=$_POST['soal9'];
    $jawaban[10]=$_POST['soal10'];
    $jawaban[11]=$_POST['soal11'];

    $soal[0]=$_POST['s1'];
    $soal[1]=$_POST['s2'];
    $soal[2]=$_POST['s3'];
    $soal[3]=$_POST['s4'];
    $soal[4]=$_POST['s5'];
    $soal[5]=$_POST['as5'];
    $soal[6]=$_POST['s6'];
    $soal[7]=$_POST['s7'];
    $soal[8]=$_POST['s8'];
    $soal[9]=$_POST['s9'];
    $soal[10]=$_POST['s10'];
    $soal[11]=$_POST['s11'];
    $jumlah_soal=count($soal);
 
    //data profil keluarga
    $nama_keluarga=$_POST['nama_keluarga'];
    $tgl_lahir_keluarga=$_POST['tgl_lahir_keluarga'];
    $hubungan=$_POST['hubungan'];
    $status_martial_keluarga=$_POST['status_martial'];
    $pekerjaan_utama=$_POST['pekerjaan_utama'];
    $pekerjaan_sampingan=$_POST['pekerjaan_sampingan'];
    $pendidikan=$_POST['pendidikan'];
    $keterangan_keluarga=$_POST['keterangan_keluarga'];
    $jumlah_anggota_keluarga=count($nama_keluarga);

    //data indeks rumah
    $ukuran_rumah=$_POST['ukuran_rumah'];
    $dinding=$_POST['dinding'];
    $lantai=$_POST['lantai'];
    $atap=$_POST['atap'];
    $kepemilikan=$_POST['kepemilikan'];
    $dapur=$_POST['dapur'];
    $mebel=$_POST['meubeler'];

//data harta
    $kebun=$_POST['kebun'];
    $elektronik=$_POST['elektronik'];
    $jumlah_elektronik=count($elektronik);
    $kendaraan=$_POST['kendaraan'];
    $jumlah_kendaraan=count($kendaraan);
    $ternak=$_POST['ternak'];
    $jumlah_ternak=$_POST['jumlah_ternak'];
    $ternak_count=count($ternak);
    $simpanan=$_POST['jumlah_simpanan'];
    $lain_lain=$_POST['lain_lain'];

 //data dhuafa
 //$indeks_rumah=$_POST['indeks_rumah'];
 //$indeks_harta=$_POST['indeks_harta'];
 //$indeks_keluarga=$_POST['indeks_keluarga'];
 //$indeks_motivasi=$_POST['indeks_motivasi'];
 //$indeks_minat=$_POST['indeks_minat'];
 //$indeks_komitmen=$_POST['indeks_komitmen'];
 //$indeks_ekonomi=$_POST['indeks_ekonomi'];   
 //$indeks_aktifitas=$_POST['indeks_aktifitas'];
 //$indeks_dhuafa=$_POST['indeks_dhuafa'];
$kode_parameter=$_POST['kode_parameter'];
$indeks=$_POST['indeks'];
$keterangan_dhuafa=$_POST['keterangan_dhuafa'];
$jumlah_indeks=count($kode_parameter);


    if(!is_dir("system/survey/data_survey/".$no_survey)){
        mkdir("system/survey/data_survey/".$no_survey);
    }else{
        //echo "folder Exist";
    }

     $uploadDir = "system/survey/data_survey/".$no_survey."/";

    $foto_rumah= $no_survey."_".$_FILES['foto_rumah']['name'];
    $foto_dinding= $no_survey."_".$_FILES['foto_dinding']['name'];
    $foto_atap= $no_survey."_".$_FILES['foto_atap']['name'];
    $foto_lantai =$no_survey."_".$_FILES['foto_lantai']['name'];
    $foto_dapur= $no_survey."_".$_FILES['foto_dapur']['name'];
    $foto_mebel= $no_survey."_".$_FILES['foto_mebel']['name'];

    $upload_foto_rumah = move_uploaded_file($_FILES['foto_rumah']['tmp_name'], $uploadDir.$foto_rumah);
    $upload_foto_dinding = move_uploaded_file($_FILES['foto_dinding']['tmp_name'], $uploadDir.$foto_dinding);
    $upload_foto_atap = move_uploaded_file($_FILES['foto_atap']['tmp_name'],$uploadDir.$foto_atap);
    $upload_foto_lantai = move_uploaded_file($_FILES['foto_lantai']['tmp_name'],$uploadDir.$foto_lantai);
    $upload_foto_dapur = move_uploaded_file($_FILES['foto_dapur']['tmp_name'],$uploadDir.$foto_dapur);
    $upload_foto_mebel = move_uploaded_file($_FILES['foto_mebel']['tmp_name'],$uploadDir.$foto_mebel);





    if($upload_foto_rumah && $upload_foto_dinding && $upload_foto_atap && $upload_foto_lantai && $upload_foto_dapur && $upload_foto_mebel){    

$simpan_survey="INSERT INTO `survey`(NO_SURVEY,ID_PEGAWAI,ID_REGULASI,NIK,STATUS_LULUS_SURVEY,TANGGAL_SURVEY)  VALUES('$no_survey','$id_pegawai','$id_regulasi','$nik','$status_lulus_survey','$tanggal')";
$exec_survey= mysql_query($simpan_survey)or die(mysqli_error());

for($a=0;$a<$jumlah_soal;$a++){
$simpan_angket="INSERT INTO `angket_survey`(NO_SURVEY,SOAL_SURVEY,JAWABAN) VALUES('$no_survey','$soal[$a]','$jawaban[$a]')";
$exec_angket= mysql_query($simpan_angket)or die(mysqli_error());
}
for($i=0;$i<$jumlah_anggota_keluarga;$i++){
$simpan_keluarga="INSERT INTO profil_keluarga (NO_SURVEY,NAMA_KELUARGA,TANGGAL_LAHIR_KELUARGA,HUBUNGAN,STATUS_MARTIAL_KELUARGA,PEKERJAAN_UTAMA,PEKERJAAN_SAMPINGAN,PENDIDIKAN,KETERANGAN) VALUES ('$no_survey','$nama_keluarga[$i]','$tgl_lahir_keluarga[$i]','$hubungan[$i]','$status_martial_keluarga[$i]','$pekerjaan_utama[$i]','$pekerjaan_sampingan[$i]','$pendidikan[$i]','$keterangan_keluarga[$i]')";
$exec_keluarga= mysql_query($simpan_keluarga)or die(mysqli_error());
}
$simpan_rumah="INSERT INTO indeks_rumah (NO_SURVEY,UKURAN_RUMAH,DINDING,LANTAI,ATAP,KEPEMILIKAN,DAPUR,MEBEL,FOTO_RUMAH,FOTO_DINDING,FOTO_ATAP,FOTO_LANTAI,FOTO_DAPUR,FOTO_MEBEL) VALUES ('$no_survey','$ukuran_rumah','$dinding','$lantai','$atap','$kepemilikan','$dapur','$mebel','$foto_rumah','$foto_dinding','$foto_atap','$foto_lantai','$foto_dapur','$foto_mebel')";
$exec_rumah=mysql_query($simpan_rumah) or die (mysqli_error());

$simpan_harta="INSERT INTO indeks_harta (NO_SURVEY,KEBUN,SIMPANAN,LAIN_LAIN) VALUES ('$no_survey','$kebun','$simpanan','$lain_lain')";
$exec_harta=mysql_query($simpan_harta) or die (mysqli_error());

for($j=0;$j<$jumlah_elektronik;$j++){
  $simpan_elktronik=mysql_query("INSERT INTO elektronik (NO_SURVEY,BARANG) VALUES ('$no_survey','$elektronik[$j]')") or die (mysqli_error());
}

for($x=0;$x<$jumlah_kendaraan;$x++){
  $simpan_kendaraan=mysql_query("INSERT INTO kendaraan (NO_SURVEY,KENDARAAN) VALUES ('$no_survey','$kendaraan[$x]')") or die (mysqli_error());
}
for($y=0;$y<$ternak_count;$y++){
  $simpan_ternak=mysql_query("INSERT INTO ternak (NO_SURVEY,TERNAK,JUMLAH_TERNAK) VALUES ('$no_survey','$ternak[$y]','$jumlah_ternak[$y]')") or die (mysqli_error());
}
for($z=0;$z<$jumlah_indeks;$z++){
  $simpan_dhuafa=mysql_query("INSERT INTO indeks_dhuafa (NO_SURVEY,KODE_PARAMETER,INDEKS_PARAMETER,KETERANGAN_INDEKS) VALUES('$no_survey','$kode_parameter[$z]','$indeks[$z]','$keterangan_dhuafa[$z]')") or die (mysqli_error());
}
if( $exec_survey && $exec_harta && $exec_rumah && $exec_keluarga && $exec_angket && $simpan_elktronik && $simpan_kendaraan && $simpan_ternak && $simpan_dhuafa){
    
            $update=mysql_query("UPDATE detail_kls SET STATUS_SUDAH_SURVEY='1' WHERE NO_KLS='$kls' AND NIK='$nik'") or die (mysqli_error());
            echo"   <script language='javascript'>
                            alert('Data Berhasil Masuk');
                           </script>   
                "; 
            }
            else{
     mysqli_error($simpan_dhuafa);
            }

            }   
        }
      
?>
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
      </div>

