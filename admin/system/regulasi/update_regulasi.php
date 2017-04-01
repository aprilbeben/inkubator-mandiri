<?php  $query1 ="SELECT * FROM regulasi WHERE id_regulasi IN( SELECT MAX(id_regulasi) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
   $kuota=$data1['KUOTA'];
  $pendaftaran_awal=$data1['PENDAFTARAN_AWAL'];
$pendaftaran_akhir=$data1['PENDAFTARAN_AKHIR'];
$wawancara_awal=$data1['WAWANCARA_AWAL'];
$wawancara_akhir=$data1['WAWANCARA_AKHIR'];
$survey_awal=$data1['SURVEY_AWAL'];
$survey_akhir=$data1['SURVEY_AKHIR'];
$status=$data1['STATUS_PENDAFTARAN'];
 ?>
 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=regulasi" title="pergi ke pendaftaran" class="tip-bottom">Regulasi</a>
   <a href="index.php?page=tambah_regulasi" title="pergi ke tambah pendaftaran" class="tip-bottom"> Tambah regulasi</a>
   </div>
   
   <h1>Regulasi</h1>
  </div>
       <div class="container-fluid">
       <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-content">
                   <form action="" method="post" enctype='multipart/form-data' class="form-horizontal">
                        
                        <div class="control-group">
                                <label class="control-label">Tahun</label>
                                <div class="controls">
                                <input type="hidden" class="span11" name="id" value="<?php echo $id?>" >
                                 <input type="text" class="span11" name="tahun" value="<?php echo $tahun?>">
                            </div>
                        </div>
                        <div class="control-group">
                <label class="control-label">Semester</label>
                <div class="controls">
                 <input type="text" class="span11" name="semester" value="<?php echo $semester?>" >
                </div>
              </div>
                           <div class="control-group">
                <label class="control-label">Kuota</label>
                <div class="controls">
                 <input type="text" class="span11" name="kuota" value="<?php echo $kuota?>" >
                </div>
              </div>
                    
                        <div class="control-group">
              <label class="control-label">Pendaftaran Awal</label>
              <div class="controls">
                <input type="date" id="tanggal"name="pendaftaran_awal" value="<?php echo $pendaftaran_awal?>">
   </div>

    <div class="control-group">
              <label class="control-label">Pendaftaran Akhir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="pendaftaran_akhir" value="<?php echo $pendaftaran_akhir?>">
   </div>
    <div class="control-group">
              <label class="control-label">Wawancara Awal</label>
              <div class="controls">
                <input type="date" id="tanggal"name="wawancara_awal" value="<?php echo $wawancara_awal; ?>">
   </div>
    <div class="control-group">
              <label class="control-label">Wawancara Akhir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="wawancara_akhir" value="<?php echo $wawancara_akhir; ?>">
   </div>
    <div class="control-group">
              <label class="control-label">Survey Awal</label>
              <div class="controls">
                <input type="date" id="tanggal"name="survey_awal" value="<?php echo $survey_awal; ?>">
   </div>
   </div>
    <div class="control-group">
              <label class="control-label">Suevey Akhir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="survey_akhir" value="<?php echo $survey_akhir; ?>">
   </div>
            </div>
                      <div class="control-group">
                <label class="control-label">status</label>
                 <?php 
if($status=="0"){
  echo"
   
              <div class='controls'>
                <label>
                  <input type='radio' name='status' id='status' Value='0' checked />
                  Belum Di buka</label>
                <label>
                  <input type='radio'name='status' id='status' Value='1'/>
                  Buka</label>
              </div>
           
            ";
          }
            else{echo"

               <div class='controls'>
                <label>
                  <input type='radio' name='status' id='status' Value='0'  />
                  Belum Di buka</label>
                <label>
                  <input type='radio'name='status' id='status' Value='1' checked/>
                  Buka</label>
";
            }
            ?>
              </div>
          
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
if(isset($_POST['simpan'])){
  $id=$_POST['id'];
  $tahun=$_POST['tahun'];
  $semester=$_POST['semester'];
  $kuota=$_POST['kuota'];
  $pendaftaran_awal=jin_date_sql($_POST['pendaftaran_awal']);
  $pendaftaran_akhir=jin_date_sql($_POST['pendaftaran_akhir']);
  $wawancara_awal=jin_date_sql($_POST['wawancara_awal']);
  $wawancara_akhir=jin_date_sql($_POST['wawancara_akhir']);
  $survey_awal=jin_date_sql($_POST['survey_awal']);
  $survey_akhir=jin_date_sql($_POST['survey_akhir']);
  $status=$_POST['status'];

$query=mysql_query("UPDATE `regulasi` SET TAHUN='$tahun',SEMESTER='$semester',KUOTA='$kuota' ,PENDAFTARAN_AWAL='$pendaftaran_awal',PENDAFTARAN_AKHIR='$pendaftaran_akhir',WAWANCARA_AWAL='$wawancara_awal',WAWANCARA_AKHIR='$wawancara_akhir',SURVEY_AWAL='$survey_awal',SURVEY_AKHIR='$survey_akhir',STATUS_PENDAFTARAN='$status' WHERE id_regulasi='$id'") or die (mysqli_error());

if($query){

  echo"<script>
  alert('data regulasi masuk');
  document.location.href='index.php?'
  </script>";
}
else{
  echo"<script>
  alert('gagal');
  document.location.href='index.php?'
  </script>";
}


}