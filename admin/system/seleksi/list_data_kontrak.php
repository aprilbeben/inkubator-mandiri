<?php
if((isset($_POST['cari']))){
  $no=$_POST['id_regulasi_1'];
$data4 =  mysql_fetch_array(mysql_query("SELECT * FROM regulasi WHERE id_regulasi='$no'"));
  $con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_inkubator");
$sql="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE regulasi.ID_REGULASI= '".$no."'";
$result = mysqli_query($con,$sql);
$sql1="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE survey.STATUS_LULUS_SURVEY='1' AND regulasi.ID_REGULASI= '".$no."'";
$sql2="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE survey.STATUS_LULUS_SURVEY='2' AND regulasi.ID_REGULASI= '".$no."'";
$sql3="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE detail_pendaftaran_seminar.PELATIHAN_PRAKTIS='1' AND survey.STATUS_LULUS_SURVEY='1' AND regulasi.ID_REGULASI= '".$no."'";
$sql4="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE detail_pendaftaran_seminar.PELATIHAN_PRAKTIS='2' AND survey.STATUS_LULUS_SURVEY='1' AND regulasi.ID_REGULASI= '".$no."'";
$sql5="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE detail_pendaftaran_seminar.PELATIHAN_PRAKTIS='3' AND survey.STATUS_LULUS_SURVEY='1' AND regulasi.ID_REGULASI= '".$no."'";

$sql6="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE detail_pendaftaran_seminar.PELATIHAN_PRAKTIS='4' AND survey.STATUS_LULUS_SURVEY='1' AND regulasi.ID_REGULASI= '".$no."'";
$sql7="SELECT survey.*,peserta.*,regulasi.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK INNER JOIN regulasi ON regulasi.ID_REGULASI=survey.ID_REGULASI INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE detail_pendaftaran_seminar.PELATIHAN_PRAKTIS='5' AND survey.STATUS_LULUS_SURVEY='1' AND regulasi.ID_REGULASI= '".$no."'";

$data_jumlah_lulus=mysqli_num_rows(mysqli_query($con,$sql1));
$data_tidak_lulus=mysqli_num_rows(mysqli_query($con,$sql2));
$data_jumlah_lulus_cukur=mysqli_num_rows(mysqli_query($con,$sql3));
$data_jumlah_lulus_salon=mysqli_num_rows(mysqli_query($con,$sql4));
$data_jumlah_lulus_desain=mysqli_num_rows(mysqli_query($con,$sql5));
$data_jumlah_lulus_jahit=mysqli_num_rows(mysqli_query($con,$sql6));
$data_jumlah_lulus_sablon=mysqli_num_rows(mysqli_query($con,$sql7));

$tahun=$data4['TAHUN'];
$semester=$data4['SEMESTER'];
?>
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
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=hasil_survey" title="pergi ke data survey" class="tip-bottom">hasil Survey</a>
   </div>
        <div class="container-fluid">
            <h3 align="center">DATA  PESERTA LOLOS SELEKSI Tahun Pelatihan 
            <span style="color: red;"><?php echo $tahun;?></span> 
            Semester <span style="color: red;"><?php echo $semester;?></span> 
            </h3>
        <hr>  
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Data Survey</h5>
          </div>
 <div class="widget-content">
            <table class="table table-bordered data-table" id="t_lulus_seleksi"> 
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Pelatihan</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
for($i=0;$i<$data_jumlah_lulus;$i++){
  $row1=mysql_fetch_array(mysql_query($sql1));
  $n=$i+1;
$data_pegawai=mysql_fetch_array(mysql_query("SELECT survey.*,pegawai.* FROM survey inner join pegawai on survey.ID_PEGAWAI=pegawai.ID_PEGAWAI  where survey.ID_REGULASI='$no'  order by survey.NO_SURVEY"))
?>
                <tr>
                  <td><center><?php echo $row1['NIK']; ?></center></td>
                  <td><center><?php echo $row1['NAMA']; ?></center></td>
                  <td><center><?php echo $row1['ALAMAT']; ?></center></td>
                  <td><center><?php echo $row1['NO_TELEPON']; ?></center></td>
                <?php
                if($row1['PELATIHAN_PRAKTIS']=='1'){
                echo"<td><center>pelatihan cukur rambut</center></td>";
                }
                if($row1['PELATIHAN_PRAKTIS']=='2'){
                echo"<td><center>pelatihan Salon Muslimah</center></td>";
                }
                if($row1['PELATIHAN_PRAKTIS']=='3'){
                echo"<td><center>pelatihan Desain Grafis</center></td>";
                }
                if($row1['PELATIHAN_PRAKTIS']=='4'){
                echo"<td><center>pelatihan Menjahit</center></td>";
                }
                if($row1['PELATIHAN_PRAKTIS']=='5'){
                echo"<td><center>pelatihan Sablon</center></td>";
                }
                 ?>
                  <td class="center" ><center>
                  <button onclick="popup('system/seleksi/cetak_kontrak.php?no_survey=<?php echo $row1['NO_SURVEY']?>&id_regulasi=<?php echo $row1['ID_REGULASI']?>')" class="btn btn-small btn-primary" title="cetak kontrak pelatihan")><i class="btn-icon-only icon-file"></i></button></center>
                  </td>               
                </tr>
                <?php
                }
                ?>
                 </tbody>
            </table>
            </div>
<?php
}
?>
