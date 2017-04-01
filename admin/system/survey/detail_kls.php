
<?php
$no = $_GET['no'];

$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_inkubator");
$sql="SELECT detail_kls.*,peserta.* FROM detail_kls JOIN peserta ON detail_kls.NIK=peserta.NIK WHERE detail_kls.NO_KLS = '".$no."'";
$result = mysqli_query($con,$sql);
$data_pegawai=mysqli_fetch_array(mysqli_query($con,"SELECT kls.*,pegawai.* FROM kls INNER JOIN pegawai ON kls.ID_PEGAWAI=pegawai.ID_PEGAWAI WHERE kls.NO_KLS='".$no."'"));

echo "
<b>NO KLS :&nbsp &nbsp".$no."</b><br>
<b>ID PEGAWAI :&nbsp &nbsp".$data_pegawai['ID_PEGAWAI']."</b>
<br>
<b>NAMA SURVEYOR:&nbsp &nbsp".$data_pegawai['NAMA']."</b>
<table class='table table-bordered data-table'>
<thead>
<tr>
<th>NIK</th>
<th>NAMA</th>
<th>ALAMAT</th>
<th>NO TELEPON</th>
<th>status survey</th>
</tr>
</thead>
<tbody>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['NIK'] . "</td>";
    echo "<td>" . $row['NAMA'] . "</td>";
    echo "<td>" . $row['ALAMAT'] . "</td>";
    echo "<td>" . $row['NO_TELEPON'] . "</td>";
   if($row['STATUS_SUDAH_SURVEY']==1){
   	echo"<td><span style='color:green;'><b>sudah di survey</b></span></td>";
   }
   else{
   	echo"<td><span style='color:red;'><b>belum di survey</b></span></td>";
   }
    echo "</tr>";
}
echo "</tbody></table>";
mysqli_close($con);
?>
