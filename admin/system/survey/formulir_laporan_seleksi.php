<?php 
						include('../../../config/connect.php');
						include('../../../config/fungsi_tanggal.php');
						
$no=$_GET['id_regulasi'];
$tanggal=date("Y-m-d");
$data4 =  mysql_fetch_array(mysql_query("SELECT * FROM regulasi WHERE id_regulasi='".$_GET['id_regulasi']."'"));
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
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
   <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
    <br>
    <br>
	<table style="width: 75%;border-collapse: collapse" align="center">
        <thead >
            <tr>
                <th style="width:10%;"  ><img style="width:100px;"src='../../asset/img/bjb.png' /> &nbsp;&nbsp;</th>
				
                <th style="width:100%;"><p align="center"><span style="font-family:Arial, Helvetica, sans-serif; font-size:20px">LAPORAN HASIL SELEKSI</span><br />
PELATIHAN WIRAUSAHA ANGKATAN <?php echo $data4['SEMESTER'];?> TAHUN <?php echo $data4['TAHUN'];?> 
<BR>BANK BJB BANDUNG<br>
</p></th>

<th style="width:10%;" align="left"> <img align="left" style="width:100px;"src='../../asset/img/pkpu.png' /></th>
            </tr>
			<tr>
                <th style="width: 50%;" colspan="3"><br />
				<span>---------------------------------------------------------------------------------------------------------------------------------------------------</span><br><br></th>
            </tr>
        </thead>

        <tbody>

 <tr>
					
                <td style="width: 100%;margin-right:10px;text-valign:top;" colspan="3">
					
 <table style="width:100%;">
                <thead>
                <tr>
                <th colspan="2">
                  DATA HASIL SELEKSI 
                </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td width="37%">Jumlah Peserta Lulus</td>
                <td width="63%"><?php echo $data_jumlah_lulus ?></td>
                </tr>
                <tr>
                <td>Jumlah Tidak Lulus</td>
                <td><?php echo $data_tidak_lulus ?></td>
                </tr>
                <tr>
                <td>Memilih Pelatihan Mencukur</td>
                <td><?php echo $data_jumlah_lulus_cukur?></td>
                </tr>
                <tr>
                <td>Memilih Pelatihan Salon</td>
                <td><?php echo $data_jumlah_lulus_salon?></td>
                </tr>
                <tr>
                <td>Memilih Pelatihan Desain</td>
                <td><?php echo $data_jumlah_lulus_desain?></td>
                </tr>
                <tr>
                <td>Memilih Pelatihan Menjahit</td>
                <td><?php echo $data_jumlah_lulus_jahit?></td>
                </tr>
                <tr>
                <td>Memilih Pelatihan Sablon</td>
                <td><?php echo $data_jumlah_lulus_sablon?></td>
                </tr>                
                </tbody>
 </table>

<table border='1' style="border-collapse: collapse;">
<tr>
<td colspan="5"><div align="center">DAFTAR PESERTA LOLOS SELEKSI</div></td>
</tr>
<tr>
<td width="35"><div align="center">No</div></td>
<td width="117"><div align="center">NAMA</div></td>
<td width="161"><div align="center">ALAMAT</div></td>
<td width="145"><div align="center">NO TELEPON</div></td>
<td width="114"><div align="center">PELATIHAN PRAKTIS</div></td>
</tr>
 
 <?php
for($i=0;$i<$data_jumlah_lulus;$i++){
	$row1=mysql_fetch_array(mysql_query($sql1));
	$n=$i+1;
echo"<tr>";
echo"<td>$n</td>";
echo"<td>".$row1['NAMA']."</td>";
echo"<td>".$row1['ALAMAT']."</td>";
echo"<td>".$row1['NO_TELEPON']."</td>";
if($row1['PELATIHAN_PRAKTIS']=='1'){
echo"<td>pelatihan cukur rambut</td>";
}
if($row1['PELATIHAN_PRAKTIS']=='2'){
echo"<td>pelatihan Salon Muslimah</td>";
}
if($row1['PELATIHAN_PRAKTIS']=='3'){
echo"<td>pelatihan Desain Grafis</td>";
}
if($row1['PELATIHAN_PRAKTIS']=='4'){
echo"<td>pelatihan Menjahit</td>";
}
if($row1['PELATIHAN_PRAKTIS']=='5'){
echo"<td>pelatihan Sablon</td>";
}
echo"</tr>";
}
 ?>
 </table>


        </td>
            </tr>
        </tbody>
      
    </table>
	<p style="margin-left: 400px;">Bandung , <?php echo (DateToIndo($tanggal));?>
	<br>Manager,
	<br><br><br><br><br><br>
	(Ganjar Muttaqqin) </p>
</page>
