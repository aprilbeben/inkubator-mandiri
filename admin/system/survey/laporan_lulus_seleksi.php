<script>
function popup(url) 
                    {
                     params  = 'fullscreen=yes';
                    

                     newwin=window.open(url,'windowname4', params);
                     if (window.focus) {newwin.focus()}
                     return false;
                    }
</script>
<?php 
$query1 ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
  $survey_awal=$data1['SURVEY_AWAL'];
  $survey_akhir=$data1['SURVEY_AKHIR'];
$data_peserta_seminar=mysql_query("SELECT * FROM pendaftaran_seminar WHERE STATUS_SURVEY=0");
$jumlah_peserta=mysql_num_rows($data_peserta_seminar);  
$id_pegawai=$_SESSION['id_pegawai'];
?>
 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php" title="pergi ke data survey" class="tip-bottom">Survey</a>
    <a href="index.php?page=pilih_survey" title="pergi ke tambah survey" class="tip-bottom"> pilih surveyor</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">FORM LAPORAN SELEKSI 
           </h3>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
          </div>
 <div class="widget-content nopadding">
 <div class="control-group">
 <form>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_regulasi"><b>Cari periode pendaftaraan</b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button>
                <div class="controls">
                <table class="table">
            
                    <tr>
                      <td><center><b>ID regulasi</b></center></td>
                      <td><strong><input class="span8" type="text" name="id_regulasi" id="id_regulasi" readonly="readonly" onchange="detail_Laporan_Seleksi(this.value)"></strong></td>
                    </tr>
                    <tr>
                    <tr>
                      <td><center><b>tahun:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="tahun" id="tahun" readonly="readonly"></td>
                    </tr>
                    <tr>
                      <td><center><b>semester</b></center></td>
                      <td> <strong><textarea class="span8" name="semester" id="semester" readonly="readonly"></textarea></strong></td>
                      </tr>
                </table>
                </div>
                
                <div class="controls" id="data_lulus_seleksi">
          
                </div>
                  
                
                </div>
                </div>
                </div>
                </div>




<div class="modal fade" id="modal_regulasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"style="width:800px">
            <div class="modal-dalog" style="width:800px" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h1>DATA SURVEYOR</h1>
                    </div>
                    <div class="modal-body widget-content" >
                    <br>
                        <table id="regulasi" class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>ID REGULASI</th>
                                    <th>TAHUN</th>
                                    <th>SEMESTER</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    

    $query ="SELECT * FROM regulasi";
  $sql = mysql_query($query);
while($data2=mysql_fetch_array($sql)) {
                                    ?>
                                    <tr class="pilih_regulasi" id-regulasi="<?php echo $data2['ID_REGULASI'];  ?>"
                                    tahun="<?php echo $data2['TAHUN'];  ?>" semester="<?php echo $data2['SEMESTER'];  ?>"?>">
                                        <td><?php echo $data2['ID_REGULASI']; ?></td>
                                        <td><?php echo $data2['TAHUN']; ?></td>
                                        <td><?php echo $data2['SEMESTER']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>