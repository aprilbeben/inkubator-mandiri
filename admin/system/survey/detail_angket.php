<table style="margin-left: 40px;">
<?php
$data_angket=mysql_query("SELECT * FROM angket_survey WHERE NO_SURVEY='$no_survey'");
for($i=0;$i<$data_angket;$i++){
  $angket=mysql_fetch_array($data_angket);
$soal=$angket['SOAL_SURVEY'];
if($soal=="s1"){
  echo"<tr>
                  <td><label class='control-label' >
                  <b>1. Mengapa anda Mengambil kursus Menjahit /desain Grafis/Sablon/cukur/Salon ?</b>
                  </label></td>
                  </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
 if($jawaban['JAWABAN']=='1'){
                    echo"
                     <tr>
                  <td>
                  <input type='text' name='soal1' value='mencari ilmu' readonly class='span8'>  
                   </td>
                    </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                    <tr>
                  <td>
                  <input class='span8' type='text' name='soal1' value='ingin berwirausaha' readonly>  
                   </td>
                    </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3'){
                    echo"
                     <tr>
                  <td>
                  <input class='span8' type='text' name='soal1' value='lain lain' readonly>  
                   </td>
                    </tr>
                  ";
                }
}

if($soal=="s2"){
  echo"           <tr>
                  <td ><label class='control-label' >
                    <b>2. Bagaimana jika anda tidak di terima di kursus tersebut ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='tidak apa apa' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                  <input type='text' name='soal1' value='menyesal' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='lain lain' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                 }

if($soal=="s3"){
  $jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
 $jbn=$jawaban['JAWABAN'];
  echo"           <tr>
                  <td ><label class='control-label' >
                    <b>3.Bidang Apa yang anda Sukai ?</b>
                  </label></td>
                    </tr>";
  echo"<tr>
<td><input type='text' value='$jbn' readonly></td>
  </tr>";
                 } 


if($soal=="s4"){
  echo"           <tr>
                  <td ><label class='control-label' >
                    <b>4. Apa Rencana Anda Setelah selesai mengikuti kursus ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='berwirausaha' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                  <input type='text' name='soal1' value='melamar kerja' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3')
                {
                   echo"
                   <tr>
                    <td>
                   <input type='text' name='soal1' value='ikut kursus lain' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='4'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='lain lain' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                 }
if($soal=="s5"){
  echo"           <tr>
                  <td ><label class='control-label' >
                    <b>5. Bagaimana jika di tengah jalan anda di terima kerja / kuliah,apakah anda akan memilih kesempatan itu  ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='YA' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                 <input type='text' name='soal1' value='Tidak' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
               if($jawaban['JAWABAN']=='3'){
                    echo"
                    <tr>
                    <td>
                   <input type='text' name='soal1' value='lain lain' readonly class='span8'> 
                  </td>
                  </tr>
                  ";
                }
                 }

if($soal=="as5"){
  $jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
 $jbn=$jawaban['JAWABAN'];
  echo"           <tr>
                  <td ><label class='control-label' >
                    <b>mengapa? $jbn</b>
                  </label></td>
                    </tr>";
                 } 

      if($soal=="s6"){
  echo"           <tr>
                  <td ><label class='control-label' >
                     <b>6. apakah anda terbiasa untuk menepati janji ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='YA' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                  <input type='text' name='soal1' value='TIDAK' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3')
                {
                   echo"
                   <tr>
                    <td>
                   <input type='text' name='soal1' value='lain lain' readonly class='span8'>   
                  </td>
                  </tr>
                  "; 
                }
                 }

  if($soal=="s7"){
  echo"           <tr>
                  <td ><label class='control-label' >
                    <b>7. apakah anda terbiasa untuk tepat waktu ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='YA' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                  <input type='text' name='soal1' value='TIDAK' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3')
                {
                   echo"
                   <tr>
                    <td>
                   <input type='text' name='soal1' value='lain lain' readonly class='span8'>   
                  </td>
                  </tr>
                  "; 
                }
  }           

  if($soal=="s8"){
    $jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
     $jbn=$jawaban['JAWABAN'];
  echo"           <tr>
                  <td ><label class='control-label' >
                     <b>8. Berapa uang pemasukan/penghasilan anda per bulan?</b>
                  </label></td>
                    </tr>
                    <tr>
                    <td>
                 <input type='text' class='span8' name='soal8' value='$jbn' readonly > dari (Gaji/orangtua/Saudara/suami/istri)
                 
                  </td>
                  </tr>
                    ";
  }

  if($soal=="s9"){
  echo"           <tr>
                  <td ><label class='control-label' >
                     <b>9. Jika tidak terima di kelas gratis apa anda akan mengikuti di kelas berbayar ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey' "));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                  <input type='text' name='soal1' value='YA' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                  <input type='text' name='soal1' value='TIDAK' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3')
                {
                   echo"
                   <tr>
                    <td>
                   <input type='text' name='soal1' value='lain lain' readonly class='span8'>   
                  </td>
                  </tr>
                  "; 
                }
  }                      
   if($soal=="s10"){
  echo"           <tr>
                  <td ><label class='control-label' >
                       <b>10.jika harus berbayar berapa biaya yang akan anda keluakan untuk mengikuti kursus tersebut ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                    <input type='text' name='soal1' value='<= 500RB' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                      <input type='text' name='soal1' value='500RB - 1 JT' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3')
                {
                   echo"
                   <tr>
                    <td>
                   <input type='text' name='soal1' value='lain lain' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
  }                      
   if($soal=="s11"){
  echo"           <tr>
                  <td ><label class='control-label' >
                         <b>11.Apa Aktifitas Anda Sehari hari ?</b>
                  </label></td>
                    </tr>";
$jawaban=mysql_fetch_array(mysql_query("SELECT JAWABAN FROM angket_survey WHERE SOAL_SURVEY='$soal' AND  NO_SURVEY='$no_survey'"));
  
                  if($jawaban['JAWABAN']=='1'){
                    echo"
                    <tr>
                    <td>
                    <input type='text' name='soal1' value='MENGGANGUR' readonly class='span8'>  
                  </td>
                  </tr>
                  ";
                }
                if($jawaban['JAWABAN']=='2')
                {
                   echo"
                   <tr>
                    <td>
                    <input type='text' name='soal1' value='MENUNGGU PANGGILAN KERJA' readonly class='span8'>  
                  
                  </td>
                  </tr>
                  "; 
                }
                if($jawaban['JAWABAN']=='3')
                {
                   echo"
                   <tr>
                    <td>
                    <input type='text' name='soal1' value='KULIAH' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
                  if($jawaban['JAWABAN']=='4')
                {
                   echo"
                   <tr>
                    <td>
                    <input type='text' name='soal1' value='BEKERJA' readonly class='span8'>  
                  </td>
                  </tr>
                  "; 
                }
  }     
  }                 
?>
                
        
                 
                    </table>
           