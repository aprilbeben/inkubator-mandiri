 <script>
function popup(url) 
                    {
                     params  = 'fullscreen=yes';
                    

                     newwin=window.open(url,'windowname4', params);
                     if (window.focus) {newwin.focus()}
                     return false;
                    }
</script>
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
              $peserta=mysql_fetch_array(mysql_query("SELECT * FROM peserta WHERE NIK='".$_GET['no']."' "));
              $nama=$peserta['NAMA'];
              $alamat=$peserta['ALAMAT'];
              $jenis_kelamin=$peserta['JENIS_KELAMIN'];
              $no_telepon=$peserta['NO_TELEPON'];
              $tanggal_lahir=$peserta['TANGGAL_LAHIR'];
              

            ?>
                    <tr>
                      <td><center><b>NIK:</b></center></td>
                      <td><strong><input class="span8" type="text" name="nik" id="nik" readonly="readonly" value="<?php echo $_GET['no'] ?>"></strong></td>
                    </tr>
                    <tr>
                      <td><center><b>Nama:</b></center></td>
                      <td align="center"><input class="span8" type="text" name="nama" id="nama" readonly="readonly" value="<?php echo $nama ?>"></td>
                    </tr>
                    <tr>
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
                    <tr>
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
                  <label><input type="radio" name="pekerjaan" id="status_pekerjaan_b" class="span8" value="bekerja">Bekerja</label>
                  <label><input type="radio" name="pekerjaan" id="status_pekerjaan_t" class="span8" value="tidak bekerja">Tidak Bekerja</label></td>
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
                    <td class="width70"><input type="text" class="span12" name="sumber"></td>
                  </tr>
                  <tr id="lama_nganggur">
                    <td><center><b>Lama Tidak Bekerja</b></center></td>
                    <td class="width70"><input type="text" class="span12" name="lama_tidak_bekerja"></td>
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
                  <input type="checkbox" name="checkMaster" id="pilih_semua" onClick="clickAll();"/> pilih semua
                  </div>
                  <table   class="table table-bordered" id="tabel_pengalaman" width="80%">
                  
                  <tr>
                  <th colspan="2">no</th>
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
        $nik=$_POST['nik'];
$tanggal=date("Y-m-d");
    
    include("../config/connect.php");
    //KODE OTOMATIS
    $nourut = mysql_query("SELECT NO_PS FROM pendaftaran_seminar ORDER BY NO_PS DESC LIMIT 0,1");
    $data = mysql_fetch_array($nourut);
    $kodeawal=substr($data['NO_PS'],11,3)+1;
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
    
    $no_ps = "SEM"."-".$thn_ajar."-".$semester."-".$c;
    //data detail PENDAFTARAN SEMINAR
    $jaminan=$_POST['jaminan'];
    $harapan=$_POST['harapan'];
    $rekomendasi=$_POST['rekomendasi'];
    $no_tlp_rekomendasi=$_POST['no_tlp_rekomendasi'];
    $praktis=$_POST['praktis'];
    $agama=$_POST['agama'];
    $status_martial=$_POST['status_martial'];
    $pendidikan=$_POST['pendidikan'];
    $anak=$_POST['anak'];
    $keahlian=$_POST['keahlian'];
    $pekerjaan=$_POST['pekerjaan'];
    

    //data BEKERJA
    $jenis_pekerjaan=$_POST['jenis_pekerjaan'];
    $status_pegawai=$_POST['status_pegwai'];
    $penghasilan=$_POST['penghasilan'];
    $lama_bekerja=$_POST['lama_bekerja'];
  
  // DATA PENGGANGURAN
    $sumber=$_POST['sumber'];
    $lama_tidak_bekerja=$_POST['lama_tidak_bekerja'];
    
    //data pengalaman_bekerja
    $jenis_usaha=$_POST['jenis_usaha'];
    $jumlah_pengalaman=count($jenis_usaha);
    $perusahaan=$_POST['perusahaan'];
    $posisi=$_POST['posisi'];
    $tahun=$_POST['tahun'];
    $status_survey=0;



$query="INSERT INTO `pendaftaran_seminar`(NO_PS,NIK,ID_REGULASI,TANGGAL_PENDAFTARAN_SEMINAR,STATUS_SURVEY)  VALUES('$no_ps','$nik','$id_regulasi','$tanggal','$status_survey')";
   //insert k tabel registrasi
$query2="INSERT INTO detail_pendaftaran_seminar (NO_PS,JAMINAN,HARAPAN,REKOMENDASI,NO_TELEPON_REKOMENDASI,STATUS_MARTIAL,PELATIHAN_PRAKTIS,AGAMA,PENDIDIKAN,JUMLAH_TANGGUNGAN,KEAHLIAN,STATUS_PEKERJAAN) VALUES
('$no_ps','$jaminan','$harapan','$rekomendasi,','$no_tlp_rekomendasi','$status_martial','$praktis','$agama','$pendidikan','$anak','$keahlian','$pekerjaan')";
$exec_r= mysql_query($query)or die(mysqli_error());
 $exec_p=mysql_query($query2)or die('error :'. mysqli_error($query2));

 if($pekerjaan=="tidak bekerja"){
   $simpan_pengganguran=mysql_query("INSERT INTO penggangguran(NO_PS,SUMBER_PENGHASILAN,LAMA_TIDAK_BEKERJA) VALUES ('$no_ps','$sumber','$lama_tidak_bekerja')");


}
elseif($pekerjaan=="bekerja"){
 $simpan_bekerja=mysql_query("INSERT INTO bekerja (NO_PS,JENIS_PEKERJAAN,STATUS_PEGAWAI,PENGHASILAN,LAMA_BEKERJA) VALUES('$no_ps','$jenis_pekerjaan','$status_pegawai','$penghasilan','$lama_bekerja')");
}



for($i=0;$i<$jumlah_pengalaman;$i++){

$query5="INSERT INTO pengalaman_bekerja (NO_PS,JENIS_USAHA,POSISI,TAHUN,PERUSAHAAN) VALUES ('$no_ps','$jenis_usaha[$i]','$posisi[$i]','$tahun[$i]','$perusahaan[$i]')";
mysql_query($query5);

}



  


if( $exec_r && $exec_p OR $simpan_pengganguran OR $simpan_bekerja){
    
            
            echo"   <script language='javascript'>
                            alert('Data Berhasil Masuk');
                            popup('system/wawancara/cetak_formulir_seminar.php?no_ps=$no_ps');
                            document.location.href='index.php?page=data_seminar';                        
                           </script>   
                ";
        
            }
            else{
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

 