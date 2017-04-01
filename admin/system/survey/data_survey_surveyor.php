<?php
  $query1 ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
  $survey_awal=$data1['SURVEY_AWAL'];
  $survey_akhir=$data1['SURVEY_AKHIR'];
  $query=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE ID_PEGAWAI='".$_SESSION['id_pegawai']."'")); 
  $nama=$query['NAMA'];
  
  $kls = mysql_query("SELECT * FROM detail_kls WHERE STATUS_SUDAH_SURVEY='0' AND  ID_PEGAWAI='".$_SESSION['id_pegawai']."'");
  $n_kls = mysql_num_rows($kls);
  $sudah_survey=mysql_query("SELECT * FROM detail_kls WHERE STATUS_SUDAH_SURVEY='1' AND  ID_PEGAWAI='".$_SESSION['id']."'");
  $n_sudah_survey=mysql_num_rows($sudah_survey); 
      ?>

 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_survey_surveyor" title="pergi ke data survey" class="tip-bottom">data Survey</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">DATA  SURVEY Tahun Pelatihan 
            <span style="color: red;"><?php echo $tahun;?></span> 
            Semester <span style="color: red;"><?php echo $semester;?></span> 
            </h3>
        <h4 align="center">
        Periode wawancara : <?php echo(DateToIndo($survey_awal));?> - <?php echo(DateToIndo($survey_akhir));?>  
        </h4>
        <h5> Surveyor   :<span><?php echo $nama;?></span><br>
            NIP        :<span><?php echo $_SESSION['username']?></span>
           </h5>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Data Survey</h5>
            <p style='float:right; height:100%;'>
        <a href='index.php?page=tambah_data_survey'><button type="submit" class="btn btn-success"><i class="icon-plus"></i>Tambah survey</button></a>
      </p>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No SURVEY</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Tanggal Survey</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
include"../config/connect.php";
$query2=mysql_query("SELECT survey.* , peserta.* FROM survey inner join peserta on survey.NIK=peserta.NIK where survey.ID_REGULASI='$id' AND id_pegawai='".$_SESSION['id_pegawai']."' order by survey.NO_SURVEY");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['NO_SURVEY']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['ALAMAT']; ?></center></td>
                  <td class="center"><center><?php echo $data2['NO_TELEPON']; ?></center></td>
                 
                  <td><center><?php echo (DateToIndo($data2['TANGGAL_SURVEY'])); ?></center></td>
                  <td class="center" ><center>

                  <a href="index.php?page=detail_data_survey&no_survey=<?php echo $data2['NO_SURVEY']?>" class="btn btn-small btn-primary")><i class="btn-icon-only icon-file"> detail survey</i></a>


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