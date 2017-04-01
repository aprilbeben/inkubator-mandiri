
 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke data wawancara" class="tip-bottom">wawancara</a><a href="index.php?page=soal_wawancara" title="pergi ke Soal wawancara" class="tip-bottom">Soal Wawancara</a>
    <a href="index.php?page=tambah_soal" title="pergi ke tambah wawancara" class="tip-bottom"> Tambah Soal wawancara</a>
   </div>
   </div>
    <div class="container-fluid">
       <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Soal Wawancara</h5>
          </div>
          
          <div class="widget-content">
           <form action="" method="post" enctype='multipart/form-data' class="form-horizontal">
      
         
                    <input type="button" name="tambah" value="tambah baris" class="span4 bg_lb" onclick="tambah_soal()">
                  <input type="button" name="hapus" value="hapus" class="span4 bg_lr" onclick="deleteRowSoal()">
                  <input type="checkbox" name="checkMaster" id="clickAll" onclick="pilihSemua()"/> pilih semua

          <table name="tabel_soal" id="tabel_soal" class="table table-bordered">
                
                   <tr>
                   <th colspan="2">no</th>
                   <th class="span12">Soal</th>
                   </tr>
                
                   </table>
      
                        <br>
                        <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                            </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>

<?php
if (isset($_POST['simpan'])){
$soal=$_POST['soal'];
$jum_soal=count($soal);
for($i=0;$i<$jum_soal;$i++){

$query="INSERT INTO soal_wawancara (soal) VALUES ('$soal[$i]')";
$sql=mysql_query($query);
if($sql){
echo"<script>
alert('berhasil di simpan');

</script>";



}


}



}


?>
