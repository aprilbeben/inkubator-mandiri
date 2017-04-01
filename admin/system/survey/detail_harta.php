
<?php
$data_harta=mysql_fetch_array(mysql_query("SELECT * FROM indeks_harta WHERE NO_SURVEY='$no_survey'"));
$kebun=$data_harta['KEBUN']; 
$simpanan=$data_harta['SIMPANAN'];
$lain_lain=$data_harta['LAIN_LAIN'];
?>
<table class="table">
  <tr>
    <td colspan="3"><strong>KEPEMILIKAN HARTA </strong></td>
  </tr>
  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>1</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>KEBUN / SAWAH </strong></p>
      </blockquote></td>
    </tr>
    <tr>
      <td colspan="2" ><strong>
    
    <?php
if($kebun=="1"){
  echo"<label>
        <input type='radio' name='kebun' value='1' checked/>
        TIDAK ADA </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='2'  disabled/>
      &lt; 1000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='3'  disabled/>
      1000-5000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='4'  disabled/>
      &gt; 5000 M2 </label>
      </strong>";
}
if($kebun=="2"){
  echo"<label>
        <input type='radio' name='kebun' value='1' disabled/>
        TIDAK ADA </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='2'  checked/>
      &lt; 1000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='3'  disabled/>
      1000-5000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='4'  disabled/>
      &gt; 5000 M2 </label>
      </strong>";
}

if($kebun=="3"){
  echo"<label>
        <input type='radio' name='kebun' value='1' disabled/>
        TIDAK ADA </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='2'  disabled/>
      &lt; 1000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='3'  checked/>
      1000-5000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='4'  disabled/>
      &gt; 5000 M2 </label>
      </strong>";
}

if($kebun=="4"){
  echo"<label>
        <input type='radio' name='kebun' value='1' disabled/>
        TIDAK ADA </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='2'  disabled/>
      &lt; 1000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='3'  disabled/>
      1000-5000 M2 </label>
      </strong><strong>
      <label>
      <input type='radio' name='kebun' value='4'  checked/>
      &gt; 5000 M2 </label>
      </strong>";
}
    ?>
     </td>
    </tr>
  

  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>2</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>ELEKTRONIK 
      </blockquote>    </td>
    </tr>
  <?php
  $query=mysql_query("SELECT * FROM elektronik WHERE NO_SURVEY='$no_survey'");?>  
   <tr>
      <td colspan="2">
        <?php
for($a=0;$a<$query;$a++){
  $data_elektronik=mysql_fetch_array($query);
  $elektronik=$data_elektronik['BARANG'];
  if($elektronik=='tidak ada'){
    echo"<strong>
    <label>
        <input type='checkbox' name='elektronik[]' value='tidak ada' checked disabled/>
        Tidak ada</label>
      </strong> ";
  }
  if($elektronik=="radio"){
    echo"   
      <strong>
      <label >
        <input type='checkbox' name='elektronik[]' value='radio'  checked disabled/>
        radio</label>
  
      </strong>";
  }
  if($elektronik=="TV"){
echo"<strong>
      <label>
        <input type='checkbox' name='elektronik[]' value='TV'  checked disabled/>
        Televisi</label>
  
      </strong>";
  }
  if($elektronik=="CD"){
echo" <strong>
      <label >
        <input type='checkbox' name='elektronik[]' value='CD'  checked disabled/>
        CD PLAYER</label>
      </strong>";
  }
  if($elektronik=="mesin"){
echo"  <strong>
      <label >
        <input type='checkbox' name='elektronik[]' value='mesin cuci' checked disabled/>
        MESIN CUCI</label>
  
      </strong>";
  }  
   if($elektronik=="kulkas"){
echo"  <strong>
      <label >
        <input type='checkbox' name='elektronik[]' value='kulkas' checked disabled/>
        KULKAS</label>
  
      </strong>";
  }  
  }
        ?>
   

      </td>
    </tr>


  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>3</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>KENDARAAN</strong></p>
      </blockquote>    </td>
    </tr>
   <?php
   $q_kendaraan=mysql_query("SELECT * FROM kendaraan WHERE NO_SURVEY='$no_survey'");
   ?> 
   <tr>
      <td colspan="2">
  <?php
  for($b=0;$b<$q_kendaraan;$b++){
    $data_kendaraan=mysql_fetch_array($q_kendaraan);
    $kendaraan=$data_kendaraan['KENDARAAN'];
 if($kendaraan=="tidak ada"){
  echo"    
<strong>
   <label >
        <input type='checkbox' name='kendaraan[]''  value='tidak ada' checked disabled/>
        Tidak ada</label>
      </strong> 
  ";
 }
 if($kendaraan=="sepeda"){
  echo"    
<strong>
   <label >
        <input type='checkbox' name='kendaraan[]''  value='tidak ada' checked disabled/>
        sepeda</label>
      </strong> 
  ";
 }
 if($kendaraan=="motor"){
  echo"    
<strong>
   <label >
        <input type='checkbox' name='kendaraan[]''  value='tidak ada' checked disabled/>
        motor</label>
      </strong> 
  ";
 }
 if($kendaraan=="mobil"){
  echo"    
<strong>
   <label >
        <input type='checkbox' name='kendaraan[]''  value='tidak ada' checked disabled/>
        Tidak ada</label>
      </strong> 
  ";
 }
  }
       ?>
</td>
    </tr>
  

 
  <tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>4</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>TERNAK</strong></p>
      </blockquote>    </td>
    </tr>
      <tr>
    <td colspan="2">
      <?php 
      $q_ternak=mysql_query("SELECT * FROM ternak WHERE NO_SURVEY='$no_survey'");
    while($data_ternak=mysql_fetch_array($q_ternak)){
      
    $ternak=$data_ternak['TERNAK'];
    $data_jumlah_ternak=mysql_fetch_array(mysql_query("SELECT * FROM ternak WHERE NO_SURVEY='$no_survey' AND TERNAK='$ternak'"));
    $jumlah_ternak=$data_jumlah_ternak['JUMLAH_TERNAK'];
 echo "$ternak &nbsp &nbsp &nbsp <input type='text' readonly value='$jumlah_ternak'><br>";
}

    ?>
    </td>
    </tr>


<tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>5</strong></p>
      </blockquote>
    </div></td>
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>SIMPANAN / TABUNGAN </strong></p>
      </blockquote>
    </div></td>
  </tr>
        <td colspan="2">
         <input type="text" name="jumlah_simpanan" id="jumlah_simpanan0" cdisabled="" class="span8" value="<?php echo $simpanan?>" disabled>
        </td>
    </tr>

  

<tr align="center" valign="middle">
    <td rowspan="2"><div align="center">
      <blockquote>
        <p><strong>6</strong></p>
      </blockquote>
    </div></td>
    <td  rowspan="2"><blockquote>
      <p align="center"><strong>LAIN LAIN </strong></p>
    </blockquote></td>
  </tr>
    <tr>
      <td colspan="2" ><textarea name="lain_lain" disabled="" class="span8"><?php echo $lain_lain?></textarea></td>
    </tr>
</table>