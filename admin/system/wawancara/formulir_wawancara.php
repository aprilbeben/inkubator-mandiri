<?php 
						include('../../../config/connect.php');
						include('../../../config/fungsi_tanggal.php');
						
						$data1 = mysql_fetch_array(mysql_query("SELECT * FROM wawancara WHERE NO_WAWANCARA='".$_GET['no_wawancara']."'"));
						$data_pegawai=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE ID_PEGAWAI='".$data1['ID_PEGAWAI']."'"));
						$data5=	 mysql_fetch_array(mysql_query("SELECT * FROM peserta WHERE NIK='".$data1['NIK']."'"));
						$data4 =  mysql_fetch_array(mysql_query("SELECT * FROM regulasi WHERE id_regulasi='".$data1['ID_REGULASI']."'"));
						
					?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
   <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
    <br>
    <br>
	<table style="width: 75%;border-collapse: collapse" align="center">
        <thead >
            <tr>
                <th style="width:10%;"  ><img style="width:100px;"src='../../asset/img/bjb.png' /> &nbsp;&nbsp;</th>
				
                <th style="width:100%;"><p align="center"><span style="font-family:Arial, Helvetica, sans-serif; font-size:20px">FORMULIR WAWANCARA PESERTA</span><br />
PELATIHAN WIRAUSAHA ANGKATAN <?php echo $data4['SEMESTER'];?> TAHUN <?php echo $data4['TAHUN'];?> 
<BR>BANK BJB BANDUNG<br>
periode :<?php echo (DateToIndo($data4['WAWANCARA_AWAL']));?> s/d <?php echo (DateToIndo($data4['WAWANCARA_AKHIR']));?>  </p></th>

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
					<span style='border: 1px;margin-top:-10px'><b>No Pendaftaran :<?php echo $_GET['no_wawancara'];?></b></span>
					<?php $status_lulus=$data1['STATUS_LULUS_WAWANCARA'];
					if($status_lulus=="1"){
						echo"<span style='font-size:20px; margin-left:300px; text-align: center; border: solid 1px #337722; background: #CCFFCC'>LULUS
				</span><br> <br>";
					}else if($status_lulus=="2"){
						echo"<span style='font-size:20px; margin-left:300px; text-align: center; border: solid 1px #337722; background: #ec1f08'>TIDAK LULUS
				</span><br><br>";
					}


					 ?>
					<span>1. Nama   : <?php echo $data5['NAMA'];?></span><br>
					<span>2. Alamat : <?php echo $data5['ALAMAT'];?></span><br>
					<br>
					<br>
					(Pewawancara : Mohon di isi jawaban wawancara secara lengkap. Terima kasih)<br><br>
					<?php
					$data2 = mysql_query("SELECT * FROM detail_wawancara WHERE NO_WAWANCARA='".$_GET['no_wawancara']."'");
					for($i=0;$i<$sql=mysql_fetch_array($data2);$i++){
					$kode_soal=$sql['KODE_SOAL'];
					$data_soal=mysql_fetch_array(mysql_query("SELECT * FROM soal_wawancara WHERE KODE_SOAL='$kode_soal'"));
					$soal=$data_soal['SOAL'];
					$no_awal=3;
					$no=$no_awal+$i;
					echo" <span><b>$no. $soal </b></span><br>";

					?> 
					<textarea name="textarea1" cols="75" style=""><?php echo $sql['JAWABAN'];?></textarea>
					<br>
					<br>
					<?php
				}

					?>
				             </td>
            </tr>
        </tbody>
      
    </table>
	<p style="margin-left: 400px;">Bandung , <?php echo (DateToIndo($data1['TANGGAL_WAWANCARA']));?>
	<br>pewawancara,
	<br><br><br><br><br><br>
	(<?php echo $data_pegawai['NAMA'];  ?>) </p>
</page>
