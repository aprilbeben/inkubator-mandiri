<?php 
						include('../../../config/connect.php');
						include('../../../config/fungsi_tanggal.php');					
$data1 = mysql_fetch_array(mysql_query("SELECT pendaftaran_seminar.*,detail_pendaftaran_seminar.* FROM pendaftaran_seminar INNER JOIN detail_pendaftaran_seminar ON pendaftaran_seminar.NO_PS=detail_pendaftaran_seminar.NO_PS  WHERE pendaftaran_seminar.NO_PS='".$_GET['no_ps']."'"));
						$data2=	 mysql_fetch_array(mysql_query("SELECT * FROM peserta WHERE NIK='".$data1['NIK']."'"));
						$data7 =  mysql_fetch_array(mysql_query("SELECT * FROM regulasi WHERE ID_REGULASI='".$data1['ID_REGULASI']."'"));
						
					?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
   <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
    <br>
    <br>
	<table style="width: 80%;border-collapse: collapse" align="center">
        <thead >
            <tr>
                <th style="width:10%;"><img style="width:100px;"src='../../asset/img/bjb.png'/></th>
                <th style="width:60%;"><p align="center"><span style="font-family:Arial, Helvetica, sans-serif; font-size:20px">FORMULIR PENDAFTARAN</span><br>
PELATIHAN WIRAUSAHA ANGKATAN <?php echo $data7['SEMESTER'];?> BANK BJB BANDUNG<br>
periode :<?php echo (DateToIndo($data7['WAWANCARA_AWAL']));?> s/d <?php echo (DateToIndo($data7['WAWANCARA_AKHIR']));?>  </p></th>

<th style="width:10%;" align="left"> <img align="left" style="width:100px;"src='../../asset/img/pkpu.png' /></th>
            </tr>
			<tr>
                <th style="width: 50%;" colspan="3">
				<span>---------------------------------------------------------------------------------------------------------------------------------------------------</span></th>
            </tr>
        </thead>

        <tbody>

 <tr>
					
                <td style="width: 100%;margin-right:10px;text-valign:top;" colspan="3"><br>
				<span style='border: 1px;margin-top:-10px'><b>No Pendaftaran :<?php echo $_GET['no_ps'];?></b></span><br><br>

					<span style='border: 1px;margin-top:-10px'><b>Identitas Diri</b></span><br><br>
					<pre style='margin-top:-10px; white-space: 0,5;'>1.  Nama   				: <?php echo $data2['NAMA'];?></pre>
					<pre style='margin-top:-10px;white-space: 0,5;'>2.  Tanggal Lahir 		         : <?php echo (DateToIndo($data2['TANGGAL_LAHIR']));?></pre>
					<pre style='margin-top:-10px'>3.  Agama 				 : <?php echo $data1['AGAMA'];?></pre>
					<pre style='margin-top:-10px'>4.  Alamat 				: <?php echo $data2['ALAMAT'];?></pre>
					<pre style='margin-top:-10px'>5.  No Telepon 			    : <?php echo $data2['NO_TELEPON'];?></pre>
					<pre style='margin-top:-10px'>6.  Pendidikan Terakhir 		   : <?php echo $data1['PENDIDIKAN'];?></pre>
					<pre style='margin-top:-10px'>7.  Status Martial 		        : <?php echo $data1['STATUS_MARTIAL'];?>
					</pre>
					<pre style='margin-top:-10px'>8.  Jumlah Tanggungan 	             : <?php echo $data1['JUMLAH_TANGGUNGAN'];?></pre>
					<pre style='margin-top:-10px'>9.  Keahlian 			      : <?php echo $data1['KEAHLIAN'];?></pre>
					<pre style='margin-top:-10px'>10. Status Pekerjaan 	              : <?php echo $data1['STATUS_PEKERJAAN'];?></pre>

					<?php
					if($data1['STATUS_PEKERJAAN']=="bekerja"){
						$data_bekerja=mysql_fetch_array(mysql_query("SELECT * FROM bekerja WHERE NO_PS='".$_GET['no_ps']."'"));
						$jenis_pekerjaan=$data_bekerja['JENIS_PEKERJAAN'];
						$status_pegawai=$data_bekerja['STATUS_PEGAWAI'];
						$penghasilan=$data_bekerja['PENGHASILAN'];
						$lama_bekerja=$data_bekerja['LAMA_BEKERJA'];
					echo"
					<span style='border: 1px;margin-top:-10px'><b>Isi Jika Sudah Bekerja</b></span><br><br>
					<pre style='margin-top:-10px'>11. Jenis  Pekerjaan 	      	: $jenis_pekerjaan  </pre>
					<pre style='margin-top:-10px'>12. Status Pekerjaan 	      	: $status_pegawai  </pre>
					<pre style='margin-top:-10px'>13. Penghasilan 	      	     : $penghasilan    /bulan<</pre>
					<pre style='margin-top:-10px'>14. Lama Bekerja 	      	    : $lama_bekerja </pre>

					<span style='border: 1px;margin-top:-10px'><b>Isi Jika Tidak Bekerja</b></span><br><br>
					<pre style='margin-top:-10px'>15. Sumber Penghasilan        	     : tidak ada </pre>					
					<pre style='margin-top:-10px'>16. lama Tidak Bekerja                     : tidak ada </pre>

					";
					}
					elseif($data1['STATUS_PEKERJAAN']=="tidak bekerja"){
						$data_penggangguran=mysql_fetch_array(mysql_query("SELECT * FROM penggangguran WHERE NO_PS='".$_GET['no_ps']."'"));
						$sumber_penghasilan=$data_penggangguran['SUMBER_PENGHASILAN'];
						$lama_tidak_bekrja=$data_penggangguran['LAMA_TIDAK_BEKERJA'];
					echo"
					<span style='border: 1px;margin-top:-10px'><b>Isi Jika Sudah Bekerja</b></span><br><br>
					<pre style='margin-top:-10px'>11. Jenis  Pekerjaan 		      : tidak ada</pre>
					<pre style='margin-top:-10px'>12. Status Pekerjaan 		      : tidak ada</pre>
					<pre style='margin-top:-10px'>13. Penghasilan 			   : tidak ada   /bulan</pre>
					<pre style='margin-top:-10px'>14. Lama Bekerja 			  : tidak ada</pre>

					<span style='border: 1px;margin-top:-10px'><b>Isi Jika Tidak Bekerja</b></span><br><br>
					<pre style='margin-top:-10px'>15. Sumber Penghasilan 		    :  $sumber_penghasilan  </pre>		
					<pre style='margin-top:-10px'>16. lama Tidak Bekerja 		    :  $lama_tidak_bekrja </pre>			

					";

					}
					else{

					}
					?>
						<span>17. Pengalaman Usaha/bekerja</span><br>
					<table border="1" style="width: 75%;border-collapse: collapse">
					<tr>
					<td><b>No</b></td>
					<td style="width:20%;"><b>Jenis Usaha</b></td>
					<td style="width:30%;"><b>Perusahaan</b> </td>
					<td style="width:20%;"><b>Posisi</b></td>
					<td style="width:20%;"><b>Tahun</b></td>
					</tr>
					<?php
					$jumlah_pengalaman=mysql_query("SELECT * FROM pengalaman_bekerja WHERE NO_PS='".$data1['NO_PS']."'");
					if($jumlah_pengalaman){
					for($i=0;$i<$data=mysql_fetch_array($jumlah_pengalaman);$i++){
						?>

					<tr>
					<td><?php echo $i+1;?></td>
					<td><?php echo $data['JENIS_USAHA']?></td>
					<td><?php echo $data['PERUSAHAAN']?></td>
					<td><?php echo $data['POSISI']?></td>
					<td><?php echo $data['TAHUN']?></td>
					</tr>

					<?php }
				}
				else{
					echo"<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><?td>
					<td></td>
					</tr>";
				}
					?>
					</table>
					<span>18. Jaminan Mengikuti Pelatihan Wirausaha Hingga Selesai 			: </span><br><br>
					<pre><input type="text" width="600" value="<?php echo $data1['JAMINAN'];  ?>"></pre>
					<span>19. Harapan Mengikuti Pelatihan 			:</span><br><br>
					<pre><input type="text" width="600"  value="<?php echo $data1['HARAPAN'];  ?>"></pre>
					<span>20. Rekomendasi dari (nama orang/telepon)				:</span><br>
					<pre><input type="text" width="350"  value="<?php echo $data1['REKOMENDASI'];  ?>">   telepon <input type="text" value="<?php echo $data1['NO_TELEPON_REKOMENDASI'] ; ?>"></pre>
					<span>21. Tindak Lanjut Paska Pelatihan Wirausaha ,Berminat Mengikuti Pelatihan praktis</span><br>
					<?php 
					if($data1['PELATIHAN_PRAKTIS']==1){
						echo"<pre color='black'><input type='text' width='600'  value='Pelatihan cukur rambut'></pre>	";
						}
						if($data1['PELATIHAN_PRAKTIS']==2){
					echo"<pre color='black'><input type='text' width='600'  value='Pelatihan salon muslimah'></pre>	";
						}  
						if($data1['PELATIHAN_PRAKTIS']==3){
					echo"<pre color='black'><input type='text' width='600'  value='Pelatihan Desain Grafis'></pre>	";
						}  
						if($data1['PELATIHAN_PRAKTIS']==4){
					echo"<pre color='black'><input type='text' width='600'  value='Pelatihan Menjahit'></pre>	";
						}
						if($data1['PELATIHAN_PRAKTIS']==5){
					echo"<pre color='black'><input type='text' width='600'  value='Pelatihan Sablon'></pre>	";
						}
						?>
					</td>
            </tr>
        </tbody>
    </table>
	<p style="margin-left: 400px;">Bandung , <?php echo (DateToIndo($data1['TANGGAL_PENDAFTARAN_SEMINAR']));?>
	<br>Calon Peserta,
	<br><br>
	(.............................................................) </p>
</page>
