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
  
  $kls = mysql_query("SELECT * FROM detail_kls WHERE ID_PEGAWAI='".$_SESSION['id_pegawai']."'");
  $n_kls = mysql_num_rows($kls);
  $belum = mysql_query("SELECT * FROM detail_kls WHERE STATUS_SUDAH_SURVEY='0' AND  ID_PEGAWAI='".$_SESSION['id_pegawai']."'");
  $n_belum = mysql_num_rows($belum);
  $sudah_survey=mysql_query("SELECT * FROM detail_kls WHERE STATUS_SUDAH_SURVEY='1' AND  ID_PEGAWAI='".$_SESSION['id_pegawai']."'");
  $n_sudah_survey=mysql_num_rows($sudah_survey);   

      ?>
   <div class="container-fluid">
   <div class="quick-actions_homepage">
      <h3 align="center">
                  Halaman Survey Pelatihan Kewirausahaan Dan pelatihan praktis <br>
                  Tahun <span style="color: red;"><?php echo $tahun;?></span> 
                  Semester <span style="color: red;"><?php echo $semester;?></span> 
      </h3>
      <h4 align="center">
        Periode Survey : <?php echo(DateToIndo($survey_awal));?> 
        - <?php echo(DateToIndo($survey_akhir));?>  
      </h4>
     
    <ul class="quick-actions site-stats">
      <li class="bg_lb span3">   <b>jumlah peserta </b> <br> <h1> <?php echo $n_kls; ?> </h1></li>
      <li class="bg_ly span3">   <b>jumlah yang belum Di Survey</b> <br> <h1><?php echo $n_belum; ?></h1></li>
      <li class="bg_lg span3">   <b>jumlah yang sudah Di Survey</b> <br> <h1><?php echo $n_sudah_survey; ?></h1></li>

    </ul>
  </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>List peserta Survey</h5>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                   <th>ALAMAT</th>
                   <th> NO TELEPON</th>
                   <th>STATUS SURVEY</th>
                </tr>
              </thead>

 <tbody>
 <?php 
 $data_kls=mysql_fetch_array(mysql_query("SELECT kls.* , pegawai.* FROM kls inner join pegawai on pegawai.ID_PEGAWAI=kls.ID_PEGAWAI WHERE pegawai.ID_PEGAWAI='".$_SESSION['id_pegawai']."' order by kls.NO_KLS"));
$sql="SELECT detail_kls.*,peserta.* FROM detail_kls JOIN peserta ON detail_kls.NIK=peserta.NIK WHERE ID_PEGAWAI='".$data_kls['ID_PEGAWAI']."'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result)){
?>
                <tr>
                
                  <td><center><?php echo $row['NIK']; ?></center></td>
                  <td class="center"><center><?php echo $row['NAMA']; ?></center></td>
                   <td class="center" ><center><?php echo $row['ALAMAT']; ?></center></td>
                   <td class="center" ><center><?php echo $row['NO_TELEPON']; ?></center></td>
<td><center><?php
 if($row['STATUS_SUDAH_SURVEY']==1){
    echo"<span style='color:green;'><b>sudah di survey</b></span>";
   }
   else{
    echo"<span style='color:red;'><b>belum di survey</b></span>";
   }

?></center></td>
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


<div class='modal fade' id='detail_kls' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'style='width:800px'> 
           <div class='modal-dalog' style='width:800px' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                     <h1>Detail LIST SURVEY </h1>
                    </div>
                    <div class='modal-body widget-content' id='data_detail_kls'>
                   
</div>
</div>
</div>  