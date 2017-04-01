<table class="table table-bordered">
  <tr>
    <td ><div align="center"><strong>NO</strong></div></td>
    <td ><div align="center"><strong>PARAMETER</strong></div></td>
    <td ><div align="center"><strong>INDEKS</strong></div></td>
    <td ><div align="center"><strong>KETERANGAN</strong></div></td>
  </tr>
 <?php
                $data=mysql_query("SELECT * FROM parameter_dhuafa");                
                for($i=0;$i<$sql=mysql_fetch_array($data);$i++){
                          $kode_parameter=$sql['KODE_PARAMETER'];
                          $parameter=$sql['PARAMETER'];
                          $no=$i+1;
                ?>
<tr>
<td><?php echo $no ?></td>
<td><?php echo $parameter?></td>
<?php $q_indeks_dhuafa=mysql_query("SELECT * FROM indeks_dhuafa WHERE NO_SURVEY='$no_survey' AND kode_parameter='$kode_parameter'");
while($data_indeks=mysql_fetch_array($q_indeks_dhuafa)){
$indeks=$data_indeks['INDEKS_PARAMETER'];
$keterangan_indeks=$data_indeks['KETERANGAN_INDEKS']

?>
<td>
<?php echo $indeks?>
</td>
<td><textarea class="span12" name="keterangan_dhuafa[]" DISABLED><?php echo $keterangan_indeks?></textarea></td>
</tr>
<?php
}
}
?>

</table>
