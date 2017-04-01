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
?>
 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php" title="pergi ke data survey" class="tip-bottom">Survey</a>
    <a href="index.php?page=pilih_survey" title="pergi ke tambah survey" class="tip-bottom"> pilih surveyor</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">FORM PEMILIHAN SURVEYOR 
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
          </div>
 <div class="widget-content nopadding">
            <form id="form-wizard" method="post">
            <div id="form-wizard-1" class="step">
              <div class="control-group">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_surveyor"><b>Cari surveyor</b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button>
                <div class="controls">
                <table class="table">
            
                    <tr>
                      <td><center><b>ID pegawai</b></center></td>
                      <td><strong><input class="span8" type="text" name="id_pegawai" id="id_pegawai" readonly="readonly"></strong></td>
                    </tr>
                    <tr>
                    <tr>
                      <td><center><b>Nama:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="nama" id="nama" readonly="readonly"></td>
                    </tr>
                    <tr>
                      <td><center><b>Alamat</b></center></td>
                      <td> <strong><textarea class="span8" name="no_egis" id="alamat" readonly="readonly"></textarea></strong></td>
                    </tr>
                  <td><center><b>No Telepon:</b></center></td>
                    <td class="width70" colspan="2"><input type="text" class="span8" name="no_telepon" id="no_telepon" readonly="readonly"> </td>
                  </tr>             
                </table>
                </div>
</div>
</div>
<div id="form-wizard-2" class="step">
 <div class="control-group">
 <h1>pilih peserta</h1>
 <div class="controls">
                     <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No Seminar</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal pendaftaran</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT pendaftaran_seminar.* , peserta.* FROM pendaftaran_seminar inner join peserta on pendaftaran_seminar.NIK=peserta.NIK where pendaftaran_seminar.ID_REGULASI='$id' AND pendaftaran_seminar.STATUS_SURVEY='0' order by pendaftaran_seminar.NO_PS");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><input type="checkbox" name="no_ps[]" id="peserta" value="<?php echo $data2['NO_PS']; ?>">
                  <input type="hidden" name="nik[]" id="nik" value="<?php echo $data2['NIK']; ?>"><?php echo $data2['NO_PS']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['ALAMAT']; ?></center></td>
                  <td class="center"><center><?php echo (jin_date_str($data2['TANGGAL_PENDAFTARAN_SEMINAR'])); ?></center></td>
                   </tr>

                <?php
                }
                ?>
                 </tbody>
            </table>  
            </div>
            </div>
            </div>

                <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Back" />
                <input id="next" class="btn btn-primary" type="submit" value="Next" name="simpan" />
                <div id="status"></div>
              </div>
              <div id="submitted">
<?php
if(isset($_POST['simpan'])){
$nourut = mysql_query("SELECT NO_KLS FROM kls ORDER BY NO_KLS DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['NO_KLS'],11,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
    $c=$kode;
   $regul=mysql_query('SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)');
    $data_regul=mysql_fetch_array($regul);
    $id_regulasi=$data_regul['ID_REGULASI'];
    $thn_ajar = $data_regul['TAHUN'];
    $semester =$data_regul['SEMESTER']; 
    $id_pegawai=$_POST['id_pegawai'];
$jum_peserta=count($_POST['no_ps']);
$tanggal=date("Y-m-d");
$no_ps=$_POST['no_ps'];
$nik=$_POST['nik'];
$status_sudah_survey=0;

    $no_kls = "KLS"."-".$thn_ajar."-".$semester."-".$c;
$query="INSERT INTO `kls`(NO_KLS,ID_PEGAWAI,ID_REGULASI,TANGGAL)  VALUES('$no_kls','$id_pegawai','$id_regulasi','$tanggal')";
$exec_r= mysql_query($query)or die(mysqli_error());


for($i=0;$i<$jum_peserta;$i++){

$detail_kls=mysql_query("INSERT INTO detail_kls (NO_KLS,ID_PEGAWAI,NIK,STATUS_SUDAH_SURVEY) VALUES ('$no_kls','$id_pegawai','$nik[$i]','$status_sudah_survey') ")or die(mysqli_error());
$update_status_survey=mysql_query("UPDATE pendaftaran_seminar SET STATUS_SURVEY='1' WHERE NO_PS='$no_ps[$i]'");

}


if( $exec_r && $detail_kls){
    
            
            echo"   <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            document.location.href='index.php?page=data_kls';
                          </script>   
                ";

}
else{
          
            echo"   <script language='javascript'>
                            alert('gagal');
                          </script>   
                ";

}




}



?>               


              </div>
                </form>
                </div>
                </div>
                </div>
                </div>

          </div>
          </div>



<div class="modal fade" id="modal_surveyor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"style="width:800px">
            <div class="modal-dalog" style="width:800px" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h1>DATA SURVEYOR</h1>
                    </div>
                    <div class="modal-body widget-content" >
                    <br>
                        <table id="daftar" class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>ID PEGAWAI</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>NO TELEPON</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    
                               
    $query ="SELECT * FROM pegawai WHERE JABATAN='surveyor'";
  $sql = mysql_query($query);
while($data2=mysql_fetch_array($sql)) {
                                    ?>
                                    <tr class="pilih_survey" id-pegawai="<?php echo $data2['ID_PEGAWAI'];  ?>" nama="<?php echo $data2['NAMA'];?>"alamat="<?php echo $data2['ALAMAT'];?>" no-telepon="<?php echo $data2['NO_TELEPON'];?>">
                                        <td><?php echo $data2['ID_PEGAWAI']; ?></td>
                                        <td><?php echo $data2['NAMA']; ?></td>
                                        <td><?php echo $data2['ALAMAT']; ?></td>
                                        <td><?php echo $data2['NO_TELEPON']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>


