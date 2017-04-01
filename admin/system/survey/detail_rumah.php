<table border='1' class="table table-bordered" >
  <thead>
    <tr>
    <td width="47" ><div align="center">NO</div></td>
    <td width="122"><div align="center">PARAMETER</div></td>
    <td width="200" ><div align="center">PHOTO</div></td>
    <td width="140"><div align="center">KETERANGAN</div></td>
  </thead>
<tbody class="thumbnails">
<?php
$data_rumah=mysql_fetch_array(mysql_query("SELECT * FROM indeks_rumah WHERE NO_SURVEY='$no_survey'"));

?>
  
<tr >
<td>1</td>
<td>Ukuran Rumah</td>
<td  class="span2" ><img src="system/survey/data_survey/<?php echo $no_survey?>/<?php echo $data_rumah['FOTO_RUMAH']?>"></td>
<td>
 <?php
if($data_rumah['UKURAN_RUMAH']=='1'){
  echo"Sangat Kecil ( < 4m2 )";
}
if($data_rumah['UKURAN_RUMAH']=='2'){
  echo"Kecil (  4 - 6m2 )";
}
if($data_rumah['UKURAN_RUMAH']=='3'){
  echo"Sedang ( 6 - 8 m2 )";
}
if($data_rumah['UKURAN_RUMAH']=='4'){
  echo"Besar ( > 8 m2 )";
}
?>

</td>
</tr>
<tr >
<td>2</td>
<td>Dinding</td>
<td  class="span2" ><img src="system/survey/data_survey/<?php echo $no_survey?>/<?php echo $data_rumah['FOTO_DINDING']?>"></td>
<td>
 <?php
if($data_rumah['DINDING']=='1'){
  echo"BILIK BAMBU / SEMI";
}
if($data_rumah['DINDING']=='2'){
  echo"SEMI";
}
if($data_rumah['DINDING']=='3'){
  echo"TEMBOK / BETON";
}
?>

</td>
</tr>
<tr >
<td>3</td>
<td>LANTAI</td>
<td  class="span2" ><img src="system/survey/data_survey/<?php echo $no_survey?>/<?php echo $data_rumah['FOTO_LANTAI']?>"></td>
<td>
 <?php
if($data_rumah['LANTAI']=='1'){
  echo"TANAH";
}
if($data_rumah['LANTAI']=='2'){
  echo"PANGGUNG";
}
if($data_rumah['LANTAI']=='3'){
  echo"SEMEN";
}
if($data_rumah['LANTAI']=='4'){
  echo"KERAMIK";
}
?>

</td>
</tr>

<tr >
<td>4</td>
<td>ATAP</td>
<td  class="span2" ><img src="system/survey/data_survey/<?php echo $no_survey?>/<?php echo $data_rumah['FOTO_ATAP']?>"></td>
<td>
 <?php
if($data_rumah['ATAP']=='1'){
  echo"IJUK / RUMBIA";
}
if($data_rumah['ATAP']=='2'){
  echo"SENG";
}
if($data_rumah['ATAP']=='3'){
  echo"GENTENG";
}
if($data_rumah['ATAP']=='4'){
  echo"ASBES";
}
?>

</td>
</tr>

<tr >
<td>5</td>
<td>KEPEMILIKAN RUMAH</td>
<td  class="span2" >-</td>
<td>
 <?php
if($data_rumah['KEPEMILIKAN']=='1'){
  echo"MENUMPANG";
}
if($data_rumah['KEPEMILIKAN']=='2'){
  echo"KONTRAK";
}
if($data_rumah['KEPEMILIKAN']=='3'){
  echo"KELUARGA";
}
if($data_rumah['KEPEMILIKAN']=='4'){
  echo"SENDIRI";
}
if($data_rumah['KEPEMILIKAN']=='5'){
  echo"KPR";
}
?>

</td>
</tr>
<tr >
<td>6</td>
<td>DAPUR</td>
<td  class="span2" ><img src="system/survey/data_survey/<?php echo $no_survey?>/<?php echo $data_rumah['FOTO_DAPUR']?>"></td>
<td>
 <?php
if($data_rumah['DAPUR']=='1'){
  echo"TUNGKU";
}
if($data_rumah['DAPUR']=='2'){
  echo"KOMPOR MINYAK";
}
if($data_rumah['DAPUR']=='3'){
  echo"KOMPOR GAS / LISTRIK";
}
?>

</td>
</tr>
<tr >
<td>7</td>
<td>MEUBELER</td>
<td  class="span2" ><img src="system/survey/data_survey/<?php echo $no_survey?>/<?php echo $data_rumah['FOTO_MEBEL']?>"></td>
<td>
 <?php
if($data_rumah['MEBEL']=='1'){
  echo"TIDAK ADA";
}
if($data_rumah['MEBEL']=='2'){
  echo"JELEK";
}
if($data_rumah['MEBEL']=='3'){
  echo"BAGUS";
}
?>

</td>
</tr>

</tbody>
</table>
