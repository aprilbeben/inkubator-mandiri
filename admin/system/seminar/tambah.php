 <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke data wawancara" class="tip-bottom">wawancara</a>
    <a href="index.php?page=tambah_wawancara" title="pergi ke tambah wawancara" class="tip-bottom"> Tambah wawancara</a>
     <a href="index.php?page=Pendaftaran Seminar" title="pergi ke daftar Seminar" class="tip-bottom"> pendaftaran Seminar</a>
   </div>
 
        <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Form Pendaftaran Seminar Pelatihan</h5>
          </div>
 <div class="widget-content nopadding">
            <form id="form-wizard" method="post" name="form_seminar">
              <div id="form-wizard-1" class="step">
              <div class="control-group">
            
                <div class="controls">
                <table class="table">
            <?php
            //if(isset($_GET['no'])){
              $regis=mysql_query("SELECT * FROM peserta WHERE no_regis='".$_GET['no']."'");
              $data_regis=mysql_fetch_array($regis);
              $nama=$data_regis['nama'];
              $alamat=$data_regis['alamat'];
              $jenis_kelamin=$data_regis['jenis_kelamin'];
              $no_telepon=$data_regis['no_telepon'];
              $tanggal_lahir=$data_regis['tanggal_lahir'];
              

            ?>
                    <tr>
                      <td><center><b>No Registrasi:</b></center></td>
                      <td><strong><input class="span8" type="text" name="no_regis" id="no_regis" readonly="readonly" value="<?php echo $_GET['no'] ?>"></strong></td>
                    </tr>
                    <tr>
                    <tr>
                      <td><center><b>Nama:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="nama" id="nama" readonly="readonly" value="<?php echo $nama ?>"></td>
                    </tr>
                    <td><center><b>Jenis Kelamin:</b></center></td>
                    <?php if($jenis_kelamin=="L"){
echo"
<td class='width70'><input type='radio'  name='jenis_kelamin' id='jenis_kelamin'  value='L' checked> Laki-Laki 
<input type='radio'  name='jenis_kelamin' id='jenis_kelamin'  value='P' > Perempuan </td>

";
}
if ($jenis_kelamin=="P"){
  echo"
td class='width70'><input type='radio'  name='jenis_kelamin' id='jenis_kelamin'  value='L' > Laki-Laki 
<input type='radio'  name='jenis_kelamin' id='jenis_kelamin'  value='P' checked> Perempuan </td>
";
}
                      ?>
                    
                  </tr>
                    <tr>
                      <td><center><b>Alamat</b></center></td>
                      <td><strong><textarea class="span8" name="alamat" id="alamat" readonly="readonly" value="<?php echo $alamat ?>"> <?php echo $alamat ?></textarea></strong></td>
                    </tr>
                  <td><center><b>No Telepon:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="no_telepon" id="no_telepon" readonly="readonly" value="<?php echo $no_telepon ?>"> </td>
                    </tr>
                    <tr>
                    <td><center><b>Tanggal Lahir:</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="tanggal_lahir" id="tanggal_lahir" readonly="readonly" value="<?php echo (jin_date_str($tanggal_lahir)); ?>"> </td>
                  </tr>
                  <tr>
                    <td><center><b>Agama :</b></center></td>
                    <td class="width70">
                    <select name="agama" class="span8">
                    <option value="">pilih agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select></td>
                 </tr>
                   <tr>
                    <td><center><b>Pendidikan Terakhir :</b></center></td>
                    <td class="width70">
                    <select name="pendidikan" class="span8">
                        <option value="">pilih pendidikan</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select></td>
                 </tr>
                 <tr>
                    <td><center><b>Status Martial :</b></center></td>
                    <td class="width70">
                    <select name="status_martial" class="span8">
                        <option value="">pilih status martial</option>
                        <option value="Lajang">Lajang</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Duda">Duda</option>
                        <option value="Janda">Janda</option>
                    </select></td>
                 </tr>
                  <tr>
                    <td><center><b>Jumlah Tanggungan (anak)</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="anak"></td>
                  </tr>
                   <tr>
                    <td><center><b>keahlian</b></center></td>
                    <td class="width70"><input type="text" class="span8" name="keahlian"></td>
                  </tr>
                </table>
                </div>
              </div>
                </div>
               <div id="form-wizard-2" class="step">
     <div class="control-group">
                <div class="controls">
                 <table class="table">
                 <tr>
                 <td><center><b>Status pekerjaan ?</b> </center></td>
                  <td>
                  <label><input type="radio" name="pekerjaan" id="status_pekerjaan_b" class="span8">Bekerja</label>
                  <label><input type="radio" name="pekerjaan" id="status_pekerjaan_t" class="span8">Tidak Bekerja</label></td>
                  </tr>

                
                    <tr id="jenis">
                    <td><center><b>Jenis Pekerjaan</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="jenis_pekerjaan"></td>
                  </tr>
                  <tr id="stat_pegawai">
                    <td><center><b>Status Pegawai</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="status_pegwai"></td>
                  </tr>
                
                  <tr id="penghasilan">
                    <td><center><b>Penghasilan per bulan</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="penghasilan"></td>
                  </tr>
                  <tr id="lama">
                    <td><center><b>Lama Bekerja ?</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="lama_bekerja"></td>
                  </tr>
                  
                    <tr id="sumber">
                    <td><center><b>Sumber penghasilan</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="anak"></td>
                  </tr>
                  <tr id="lama_nganggur">
                    <td><center><b>Lama Tidak Bekerja</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="anak"></td>
                  </tr>
                  
        </table>
        </div>
        </div>
                  

              </div>
               <div id="form-wizard-3" class="step">
                <div class="control-group">
                <label class="controls-label" align="center"><h3>Pengalaman Pekerjaan</h3></label>
                  <div class="controls">
                  <input type="button" name="tambah" value="tambah pengalaman" class="span4 bg_lb" onclick="tambah_baris()">
                  <input type="button" name="hapus" value="hapus" class="span4 bg_lr" onClick="deleteRow()">
                  <input type="checkbox" name="checkMaster" id="pilihsemua" onClick="clickAll();"/> pilih semua
                  </div>
                  <table   class="table table-bordered" id="tabel_pengalaman">
                  
                  <tr>
                  <th></th>
                  <th>no</th>
                  <th>Jenis Usaha</th>
                  <th>Perusahaan</th>
                  <th>Posisi</th>
                  <th>Tahun</th>
                  </tr>
                  
                  </table>
               </div>
                </div>

                <div id="form-wizard-4" class="step">
                <div class="control-group">
                  <div class="controls">
                 <table class="table">
                 <tr>
                 <td> Jaminan Mengikuti Pelatihan Wirausaha Hingga Selesai</td>
                 <td><input type="text" name="jaminan"></td>
                 </tr>
                 <tr>
                 <td> Harapan Mengikuti Pelatihan</td>
                 <td><textarea name="harapan"></textarea></td>
                 </tr>
                 <tr>
                 <td> Rekomendaasi dari (Nama orang/telepon)</td>
                 <td><input type="text" name="rekomendasi">
                  <label>no telepon</label> <input type="text" name="no_tlp_rekomendasi"></td>
                 </tr>
                 <tr>
                 <td> tindak lanjut pasca pelatihan wirausaha, berminat Mengikuti pelatihan praktis ?</td>
                 <td><label><input type="radio" name="minat" id="minat" value="Y" onchange="show_praktis()"> YA</label>
                 <label><input type="radio" name="minat" id="minat" value="T" onchange="show_praktis()"> TIDAK</label></td>
                 <!--<td><select name="minat" id="minat" onchange="show_praktis()">
                 <option>--pilih minat--</option>
                 <option value="Y">Minat</option>
                 <option value="T">Tidak Minat</option>
</select>
</td>-->
                 </tr>
                 <tr>
                 <td>Pilih Pelatihan Praktis</td>
                 <td id="praktis">
                 </td>
                 </tr>

  <!--               <tr id="pelatihan_praktis_y">
                 <td> pilih pelatihan praktis </td>
                 <td><label><input type="radio" name="pelatihan"  value="cukur">Cukur</label>
                 <label><input type="radio" name="pelatihan"  value="salon"> Salon</label>
                 </td>
                 </tr>
                 <tr id="pelatihan_praktis_t">
                 <td> pilih pelatihan praktis </td>
                 <td>
                  <label><input type="radio" name="pelatihan" id="pelatihan_tidak"  value="tidak" checked="checked"> tidak Memilih</label>
                 </td>
                 </tr>
-->


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
//}


    if(isset($_POST['simpan'])){
        $no_regis=$_POST['no_regis'];
$soal1=$_POST['soal1'];
$soal2=$_POST['soal2'];
$soal3=$_POST['soal3'];
$soal4=$_POST['soal4'];
$soal5=$_POST['soal5'];
$soal6=$_POST['soal6'];
$status_lulus=$_POST['status_lulus'];
$status_wawancara=1;
$tanggal=date("Y-m-d");
    
    include("../config/connect.php");
    //KODE OTOMATIS
    $nourut = mysql_query("SELECT no_wawancara FROM wawancara ORDER BY no_wawancara DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['no_wawancara'],11,3)+1;
        if($kodeawal<10){
            $kode='00'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
            $kode='0'.$kodeawal;
        }else{
            $kode=001;
        }
    $c=$kode;
    $regul=mysql_query('SELECT * FROM regulasi WHERE id_regulasi IN( SELECT MAX(id_regulasi) FROM regulasi)');
    $data_regul=mysql_fetch_array($regul);
    $id_regulasi=$data_regul['id_regulasi'];
    $thn_ajar = $data_regul['tahun'];
    $semester =$data_regul['semester'];
    
    $no_wawancara = "WAW"."-".$thn_ajar."-".$semester."-".$c;

$query="INSERT INTO `wawancara`(no_wawancara,tanggal,no_regis,id_regulasi,status_lulus)  VALUES('$no_wawancara','$tanggal','$no_regis','$id_regulasi','$status_lulus')";
   //insert k tabel registrasi
$query2="INSERT INTO detail_wawancara(no_wawancara ,soal1,soal2,soal3,soal4,soal5,soal6) VALUES('$no_wawancara','$soal1','$soal2','$soal3','$soal4','$soal5','$soal6')";
$query3="UPDATE registrasi SET status='1' WHERE no_regis='$no_regis'";
    $exec_r= mysql_query($query)or die(mysqli_error());
 $exec_p=mysql_query($query2)or die('error :'. mysqli_error());
 $exec_s=mysql_query($query3)or die('error :'. mysqli_error());


if( $exec_r){
    
            
            echo"   <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            popup('system/wawancara/cetak_form_wawancara.php?no_wawancara=".$no_wawancara."');
                          </script>   
                ";
        
            }else{
             echo"<script language='javascript'>
                       alert('Gagal');
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

 