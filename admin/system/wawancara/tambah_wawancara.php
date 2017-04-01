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
   $wawancara_awal=$data1['WAWANCARA_AWAL'];
  $wawancara_akhir=$data1['WAWANCARA_AKHIR'];
  

?>
 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke data wawancara" class="tip-bottom">wawancara</a>
    <a href="index.php?page=tambah_wawancara" title="pergi ke tambah wawancara" class="tip-bottom"> Tambah wawancara</a>
   </div>
 
        <div class="container-fluid">
            <h3 align="center">FORM WAWANCARA Tahun Pelatihan 
            <span style="color: red;"><?php echo $tahun;?></span> 
            Semester <span style="color: red;"><?php echo $semester;?></span> 
            </h3>
        <h4 align="center">
        Periode wawancara : <?php echo(DateToIndo($wawancara_awal));?> - <?php echo(DateToIndo($wawancara_akhir));?>  
        </h4>
        
        <hr>
        
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Form Wawancara</h5>
          </div>
 <div class="widget-content nopadding">
            <form id="form-wizard" method="post">
              <div id="form-wizard-1" class="step">
              <div class="control-group">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><b>Cari Calon Peserta</b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button>
                <div class="controls">
                <table class="table">
            
                    <tr>
                      <td><center><b>No Registrasi:</b></center></td>
                      <td><strong><input class="span8" type="text" name="no_regis" id="no_regis" readonly="readonly"></strong></td>
                    </tr>
                     <tr>
                      <td><center><b>NIK:</b></center></td>
                      <td><strong><input class="span8" type="text" name="nik" id="nik1" readonly="readonly"></strong></td>
                    </tr>
                    <tr>
                    <tr>
                      <td><center><b>Nama:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="nama" id="nama" readonly="readonly"></td>
                    </tr>
                    <tr>
                      <td><center><b>Alamat</b></center></td>
                      <td><strong><textarea class="span8" name="alamat" id="alamat" readonly="readonly"></textarea></strong></td>
                    </tr>
                  <td><center><b>No Telepon:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="no_telepon" id="no_telepon" readonly="readonly"> </td>
                  </tr>
              
                  
                </table>
                </div>
              </div>
                </div>
               <div id="form-wizard-2" class="step">
                <div class="control-group">
                <?php
                $data=mysql_query("SELECT * FROM soal_wawancara");                
                while($sql=mysql_fetch_array($data)){
                          $kode_soal=$sql['KODE_SOAL'];
                          $soal=$sql['SOAL'];
                ?>
                  <label class="control-label" ><b><?php echo " $kode_soal . $soal"; ?></b>
                  </label>
                  <div class="controls">
                  <input type="hidden"name="kode_soal[]" value="<?php echo $kode_soal?>">
                    <textarea name="jawaban[]" class="span12"></textarea>
                    </div>
                  <?php
                }
                  ?>
                  
                </div>
              </div>
          

 <div id="form-wizard-8" class="step">
                <div class="control-group">
                  <label class="control-label" align="center"><h2>Peserta Ini Lulus ?</h2>
                  </label>
                  <div class="controls" align="center">
                    <input class="span12" type="radio" name="status_lulus" id="status_lulus" Value="1" selected /> Lulus
                     
                  </div>
                  <div class="controls" align="center">
                    <input class="span12" type="radio" name="status_lulus" id="status_lulus" Value="2" selected />  Tidak Lulus
                     
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
        $no_regis=$_POST['no_regis'];
$status_lulus=$_POST['status_lulus'];
$status_wawancara=1;
$tanggal=date("Y-m-d");
    
    include("../config/connect.php");
    //KODE OTOMATIS
    $nourut = mysql_query("SELECT NO_WAWANCARA FROM wawancara ORDER BY NO_WAWANCARA DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['NO_WAWANCARA'],11,3)+1;
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
    $kode_soal=$_POST['kode_soal'];
    $jawaban=$_POST['jawaban'];
    $jumlah_soal=count($kode_soal);
    $id_pegawai=$_SESSION['id_pegawai'];
    $nik=$_POST['nik'];
    
    $no_wawancara = "WAW"."-".$thn_ajar."-".$semester."-".$c;

$query="INSERT INTO `wawancara`(NO_WAWANCARA, ID_PEGAWAI, NIK, ID_REGULASI, TANGGAL_WAWANCARA, STATUS_LULUS_WAWANCARA)  VALUES('$no_wawancara', '$id_pegawai', '$nik', '$id_regulasi','$tanggal','$status_lulus')";
$exec_r= mysql_query($query)or die(mysqli_error());
   for($i=0;$i<$jumlah_soal;$i++){
$query2="INSERT INTO detail_wawancara(NO_WAWANCARA,KODE_SOAL,JAWABAN) VALUES('$no_wawancara','$kode_soal[$i]','$jawaban[$i]')";
$exec_p=mysql_query($query2)or die('error :'. mysqli_error());
}
$query3="UPDATE registrasi SET STATUS_WAWANCARA='1' WHERE NO_REGIS='$no_regis'";
    
 $exec_s=mysql_query($query3)or die('error :'. mysqli_error());


if( $exec_r){
    
            
            echo"   <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            popup('system/wawancara/cetak_form_wawancara.php?no_wawancara=".$no_wawancara."');
                          </script>   
                ";
                if($status_lulus=='1'){

                  echo"  <script>
                    document.location.href='index.php?page=pendaftaran_seminar&no=".$nik."'
                    </script>";
                }
                else{
                  echo"  <script>
                    document.location.href='index.php?page=wawancara'
                    </script>";
                }



        
            }else{
             echo"<script language='javascript'>
                       alert('Gagal');
                        document.location.href='index.php?page=wawancara'
                    </script> ";
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

