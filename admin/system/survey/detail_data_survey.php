
 <?php
 $no_survey=$_GET['no_survey']; 
include"../config/connect.php";
$query1 ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
   $survey_awal=$data1['SURVEY_AWAL'];
  $survey_akhir=$data1['SURVEY_AKHIR'];

$data_pegawai=mysql_fetch_array(mysql_query("SELECT survey.* ,pegawai.* FROM survey inner join pegawai on survey.iD_PEGAWAI=pegawai.iD_PEGAWAI where survey.ID_REGULASI='$id' AND survey.NO_SURVEY='$no_survey' order by survey.NO_SURVEY"));
$data_peserta=mysql_fetch_array(mysql_query("SELECT survey.* , peserta.*  FROM survey inner join peserta on survey.NIK=peserta.NIK where survey.ID_REGULASI='$id' AND survey.NO_SURVEY='$no_survey' order by survey.NO_SURVEY"));
?>
 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=data_survey_surveyor" title="pergi ke data survey" class="tip-bottom">data survey</a><a href="#" title="pergi ke data survey" class="tip-bottom">detail data survey</a>
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
      <div class="widget-title"><span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Data Survey</h5>
      </div>
       <div class="widget-content tab-content">
        <div class="span6">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4>No Survey</h4></td>
                      <td><h4 style="color:green;"><?php echo $no_survey;?></h4></td>
                    </tr>
                    <tr>
                      <td>NAMA SURVEYOR   &nbsp&nbsp:</td>
                      <td><h5><b><?php echo $data_pegawai['NAMA'];?></b></h5></td>
                    </tr>
                    <tr>
                      <td>ALAMAT&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td>
                      <td><h5><b><?php echo $data_pegawai['ALAMAT'];?></b></h5></td>
                    </tr>
                    <tr>
                      <td>NO TELEPON  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td>
                      <td><h5><b><?php echo $data_pegawai['NO_TELEPON'];?></b></h5></td>
                    </tr>
                     </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <tr>
                      <td class="width30">NIK:</td>
                      <td class="width70"><strong><?php echo $data_peserta['NIK'];?></strong></td>
                    </tr>
                    <tr>
                      <td>NAMA PESERTA:</td>
                      <td><strong><?php echo $data_peserta['NAMA'];?></strong></td>
                    </tr>
                    <tr>
                      <td>ALAMAT:</td>
                      <td><strong><?php echo $data_peserta['ALAMAT'];?></strong></td>
                    </tr>
                  <td class="width30">NO TELEPON</td>
                    <td class="width70"><strong><?php echo $data_peserta['NO_TELEPON'];?></strong> </td>
                  </tr>
                    </tbody>
                  
                </table>
       </div>
       </div>
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Data Angket</a></li>
              <li><a data-toggle="tab" href="#tab2">Profil Keluarga</a></li>
              <li><a data-toggle="tab" href="#tab3">Indeks rumah</a></li>
              <li><a data-toggle="tab" href="#tab4">Indeks Harta</a></li>
              <li><a data-toggle="tab" href="#tab5">Indeks Dhuafa</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
            <?php include"system/survey/detail_angket.php"; ?>
                 </div>
            <div id="tab2" class="tab-pane">
              <?php include"system/survey/detail_profil_keluarga.php"; ?>
            </div>
            <div id="tab3" class="tab-pane">
               <?php include"system/survey/detail_rumah.php"; ?></div>
          
           <div id="tab4" class="tab-pane">
               <?php include"system/survey/detail_harta.php"; ?></div>
               <div id="tab5" class="tab-pane">
               <?php include"system/survey/detail_indeks_dhuafa.php"; ?></div>
        </div>
        </div>
        </div>
        </div>
        </div>
  
