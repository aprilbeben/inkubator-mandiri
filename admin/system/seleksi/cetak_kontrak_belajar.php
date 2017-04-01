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
            <h3 align="center">FORM CETAK KONTRAK PELATIHAN
           </h3>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
          </div>
 <div class="widget-content nopadding">
 <div class="control-group">
 <form method="POST" action="index.php?page=data_list_kontrak">
                <div class="controls">
                <table class="table">
            
                    <tr>
                      <td><center><b>ID regulasi</b></center></td>
                      <td><strong><input class="span8" type="text" name="id_regulasi_1" id="id_regulasi_1" data-toggle="modal" data-target="#modal_regulasi_1"></strong></td>
                      <td> <button type="submit" class="btn btn-success" name="cari" id="cari"><b>Cari data calon peserta</b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button></td>
                    </tr>
                </table>
                </div>
          </form>

                
                </div>
                </div>
                </div>
                </div>




<div class="modal fade" id="modal_regulasi_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"style="width:800px">
            <div class="modal-dalog" style="width:800px" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h1>DATA SURVEYOR</h1>
                    </div>
                    <div class="modal-body widget-content" >
                    <br>
                        <table id="regulasi1" class="table table-bordered data-table">
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
                                    <tr class="pilih_regulasi_1" id-regulasi1="<?php echo $data2['ID_REGULASI'];  ?>"
                                    tahun1="<?php echo $data2['TAHUN'];  ?>" semester1="<?php echo $data2['SEMESTER'];  ?>">
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