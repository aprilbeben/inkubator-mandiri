
<?php
$no = $_GET['no'];

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
?>
<center> <table class='table table-bordered' style="width:50%;">
                <thead>
                <tr>
                <th colspan="2">
                  DATA HASIL SELEKSI 
                </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td><center>Jumlah Peserta Lulus</center></td>
                <td><center><?php echo $data_jumlah_lulus ?></center></td>
                </tr>
                <tr>
                <td><center>Jumlah Tidak Lulus</center></td>
                <td><center><?php echo $data_tidak_lulus ?></center></td>
                </tr>
                <tr>
                <td><center>Memilih Pelatihan Mencukur</center></td>
                <td><center><?php echo $data_jumlah_lulus_cukur?></center></td>
                </tr>
                <tr>
                <td><center>Memilih Pelatihan Salon</center></td>
                <td><center><?php echo $data_jumlah_lulus_salon?></center></td>
                </tr>
                <tr>
                <td><center>Memilih Pelatihan Desain</center></td>
                <td><center><?php echo $data_jumlah_lulus_desain?></center></td>
                </tr>
                <tr>
                <td><center>Memilih Pelatihan Menjahit</center></td>
                <td><center><?php echo $data_jumlah_lulus_jahit?></center></td>
                </tr>
                <tr>
                <td><center>Memilih Pelatihan Sablon</center></td>
                <td><center><?php echo $data_jumlah_lulus_sablon?></center></td>
                </tr>
                <tr>
                <td colspan="2"> <button onclick="popup('system/survey/cetak_laporan_seleksi.php?id_regulasi=<?php echo $no?>')" class="btn btn-small btn-primary span12")><i class="btn-icon-only icon-file"> CETAK LAPORAN</i></button>
                  </td>
                </tr>
                </tbody>
 </table></center>