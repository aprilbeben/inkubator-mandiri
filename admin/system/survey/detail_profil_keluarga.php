<table border='1' class="table table-bordered" >
  <thead>
    <tr>
    <td width="47" rowspan="2"><div align="center">NO</div></td>
    <td width="122" rowspan="2"><div align="center">NAMA</div></td>
    <td width="71" rowspan="2"><div align="center">TGL LAHIR </div></td>
    <td width="140" rowspan="2"><div align="center">HUBUNGAN</div></td>
    <td width="95" rowspan="2"><div align="center">STATUS</div></td>
    <td colspan="2"><div align="center">PEKERJAAN</div></td>
    <td width="95" rowspan="2"><div align="center">PENDIDIKAN</div></td>
    <td width="95" rowspan="2"><div align="center">KET</div></td>
  </tr>
  <tr>
    <td width="95"><div align="center">UTAMA</div></td>
    <td width="95"><div align="center">SAMPINGAN</div></td>
  </tr>
  </thead>
<tbody>
<?php
$data_keluarga=mysql_query("SELECT * FROM profil_keluarga WHERE NO_SURVEY='$no_survey'");
for($i=0;$i<$profil_keluarga=mysql_fetch_array($data_keluarga);$i++){
$no=$i+1;
$nama=$profil_keluarga['NAMA_KELUARGA'];
$tgl_lahir_keluarga=$profil_keluarga['TANGGAL_LAHIR_KELUARGA'];
$hubungan=$profil_keluarga['HUBUNGAN'];
$status_martial_keluarga=$profil_keluarga['STATUS_MARTIAL_KELUARGA'];
$pekerjaan_utama=$profil_keluarga['PEKERJAAN_UTAMA'];
$pekerjaan_sampingan=$profil_keluarga['PEKERJAAN_SAMPINGAN'];
$pendidikan=$profil_keluarga['PENDIDIKAN'];
$ket=$profil_keluarga['KETERANGAN'];
?>
  
<tr>
<td><?php echo $no;?></td>
<td><?php echo $nama;?></td>
<td><?php echo(jin_date_str($tgl_lahir_keluarga));?></td>
<td><?php echo $hubungan;?></td>
<td><?php echo $status_martial_keluarga;?></td>
<td><?php echo $pekerjaan_utama;?></td>
<td><?php echo $pekerjaan_sampingan;?></td>
<td><?php echo $pendidikan;?></td>
<td><?php echo $ket;?></td>
</tr>
<?php
}
?>
</tbody>
</table>
