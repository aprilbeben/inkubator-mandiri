 <?php

 if(isset($_GET['no'])){
$data=mysql_fetch_array(mysql_query("SELECT * FROM soal_wawancara WHERE kode_soal='".$_GET['no']."' "));
  ?>

 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke data wawancara" class="tip-bottom">wawancara</a><a href="index.php?page=soal_wawancara" title="pergi ke Soal wawancara" class="tip-bottom">Soal Wawancara</a>
    <a href="index.php?page=edit_soal" title="pergi ke tambah wawancara" class="tip-bottom"> edit Soal wawancara</a>
   </div>
   </div>
    <div class="container-fluid">
       <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Soal Wawancara</h5>
          </div>
          
          <div class="widget-content">
           <form action="" method="post" enctype='multipart/form-data' class="form-horizontal">
      <table class="table table-bordered">
      <tr>
      <th>
        <label class="group-label">No <?php echo$_GET['no']?></label>
      </th>
      <th>
      <input type="hidden" name="kode_soal" value="<?php echo$_GET['no']?>">
      <textarea name="soal" class="span12"><?php echo $data['SOAL']; ?> </textarea>
       </th></tr></table>
                        <br>
                        <div class="form-actions">
                                <button type="submit" class="btn btn-success" name="update">Simpan</button>
                            </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>

<?php
}
if (isset($_POST['update'])){
$soal=$_POST['soal'];
$kode_soal=$_POST['kode_soal'];

$query="UPDATE soal_wawancara SET SOAL='$soal' WHERE KODE_SOAL='$kode_soal'";
$sql=mysql_query($query);
if($sql){
echo"<script>
alert('berhasil di rubah');
document.location.href='index.php?page=soal_wawancara';
</script>";





}



}



?>