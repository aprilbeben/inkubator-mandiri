<?php
  $query1 ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
  $survey_awal=$data1['SURVEY_AWAL'];
  $survey_akhir=$data1['SURVEY_AKHIR'];
      ?>

 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=hasil_survey" title="pergi ke data survey" class="tip-bottom">hasil Survey</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">DATA  SURVEY Tahun Pelatihan 
            <span style="color: red;"><?php echo $tahun;?></span> 
            Semester <span style="color: red;"><?php echo $semester;?></span> 
            </h3>
        <h4 align="center">
        Periode wawancara : <?php echo(DateToIndo($survey_awal));?> - <?php echo(DateToIndo($survey_akhir));?>  
        </h4>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Data Survey</h5>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No SURVEY</th>
                  <th>Surveyor</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal Survey</th>
                  <th>Status Survey</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
include"../config/connect.php";
$query2=mysql_query("SELECT survey.* , peserta.* FROM survey inner join peserta on survey.NIK=peserta.NIK  where survey.ID_REGULASI='$id'  order by survey.NO_SURVEY");
while($data2=mysql_fetch_array($query2)){
$data_pegawai=mysql_fetch_array(mysql_query("SELECT survey.*,pegawai.* FROM survey inner join pegawai on survey.ID_PEGAWAI=pegawai.ID_PEGAWAI  where survey.ID_REGULASI='$id'  order by survey.NO_SURVEY"))
?>
                <tr>
                
                  <td><center><?php echo $data2['NO_SURVEY']; ?></center></td>
                  <td><center><?php echo $data_pegawai['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['ALAMAT']; ?></center></td>
                  <td><center><?php echo (DateToIndo($data2['TANGGAL_SURVEY'])); ?></center></td>

                <?php
                if($data2['STATUS_LULUS_SURVEY']==0){
                  echo"<td><center><span style='color:black'>belum di seleksi</span></center></td>";
                }
                if($data2['STATUS_LULUS_SURVEY']==1){
                  echo"<td><center><span style='color:green'>lulus seleksi</span></center></td>";
                }
                if($data2['STATUS_LULUS_SURVEY']==2){
                  echo"<td><center><span style='color:red'>tidak lulus seleksi</span></center></td>";
                }
                ?>
                  <td class="center" ><center>

                  <a href="index.php?page=seleksi&no_survey=<?php echo $data2['NO_SURVEY']?>" class="btn btn-small btn-primary")><i class="btn-icon-only icon-file"> seleksi</i></a>


                  <a href="system/survey/delete_data_survey.php?no_survey=<?php echo $data2['NO_SURVEY']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a>
                  </center></td>
                  
                  

                  
                </tr>

                <?php
                }
                ?>
                 </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>