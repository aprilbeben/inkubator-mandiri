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
                                <input type="text" class="span11" name="tahun" placeholder="Tahun" >
                            </div>
                        </div>
                        <div class="control-group">
                <label class="control-label">Semester</label>
                <div class="controls">
                 <input type="text" class="span11" name="semester" placeholder="Semester" >
                </div>
              </div>
                           <div class="control-group">
                <label class="control-label">Kuota</label>
                <div class="controls">
                 <input type="text" class="span11" name="kuota" placeholder="kuota" >
                </div>
              </div>
                    
                        <div class="control-group">
              <label class="control-label">Pendaftaran Awal</label>
              <div class="controls">
                <input type="date" id="tanggal"name="pendaftaran_awal">
   </div>

    <div class="control-group">
              <label class="control-label">Pendaftaran Akhir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="pendaftaran_akhir">
   </div>
    <div class="control-group">
              <label class="control-label">Wawancara Awal</label>
              <div class="controls">
                <input type="date" id="tanggal"name="wawancara_awal">
   </div>
    <div class="control-group">
              <label class="control-label">Wawancara Akhir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="wawancara_akhir">
   </div>
    <div class="control-group">
              <label class="control-label">Survey Awal</label>
              <div class="controls">
                <input type="date" id="tanggal"name="survey_awal">
   </div>
    <div class="control-group">
              <label class="control-label">Suevey Akhir</label>
              <div class="controls">
                <input type="date" id="tanggal"name="survey_akhir">
   </div>
            </div>
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
  $tahun=$_POST['tahun'];
  $semester=$_POST['semester'];
  $kuota=$_POST['kuota'];
  $pendaftaran_awal=jin_date_sql($_POST['pendaftaran_awal']);
  $pendaftaran_akhir=jin_date_sql($_POST['pendaftaran_akhir']);
  $wawancara_awal=jin_date_sql($_POST['wawancara_awal']);
  $wawancara_akhir=jin_date_sql($_POST['wawancara_akhir']);
  $survey_awal=jin_date_sql($_POST['survey_awal']);
  $survey_akhir=jin_date_sql($_POST['survey_akhir']);
  $status=0;
  $no_regulasi="RGS"."-".$tahun."-".$semester;

$query=mysql_query("INSERT INTO `regulasi` (ID_REGULASI, TAHUN, SEMESTER, KUOTA, PENDAFTARAN_AWAL, PENDAFTARAN_AKHIR,WAWANCARA_AWAL, WAWANCARA_AKHIR, SURVEY_AWAL, SURVEY_AKHIR, STATUS_PENDAFTARAN) VALUES ('$no_regulasi', '$tahun','$semester','$kuota','$pendaftaran_awal','$pendaftaran_akhir','$wawancara_awal','$wawancara_akhir','$survey_awal','$survey_akhir','$status')") or die (mysqli_error($query));

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