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
<td><input type="hidden" name="kode_parameter[]" value="<?php echo $kode_parameter ;?>">
<select name="indeks[]">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
</td>
<td><textarea class="span12" name="keterangan_dhuafa[]"></textarea></td>
</tr>
<?php
}
?>

</table>
