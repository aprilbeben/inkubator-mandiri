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
  
  $regis = mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$id' AND KONFIRMASI='1'");
  $n_regis = mysql_num_rows($regis);
  $sudah_wawancara=mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$id' AND STATUS_WAWANCARA='1' AND KONFIRMASI='1'");
  $n_sudah_wawancara=mysql_num_rows($sudah_wawancara);
  $belum_wawancara=mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$id' AND STATUS_WAWANCARA='0' AND KONFIRMASI='1'");
  $n_belum_wawancara=mysql_num_rows($belum_wawancara);   

      ?>

  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke wawancara" class="tip-bottom">Data pendaftaran seminar</a></div>
  </div>


<div class="row-fluid">
      <h3 align="center">
                  Pendaftaran Seminar Pelatihan Kewirausahaan Dan pelatihan praktis <br>
                  Tahun <span style="color: red;"><?php echo $tahun;?></span> 
                  Semester <span style="color: red;"><?php echo $semester;?></span> 
      </h3>
      <h4 align="center">
        Periode wawancara : <?php echo(DateToIndo($wawancara_awal));?> 
        - <?php echo(DateToIndo($wawancara_akhir));?>  
      </h4>
      </div>


   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Pendaftaran Seminar</h5>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No Seminar</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal pendaftaran</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT pendaftaran_seminar.* , peserta.* FROM pendaftaran_seminar inner join peserta on pendaftaran_seminar.NIK=peserta.NIK where pendaftaran_seminar.ID_REGULASI='$id' order by pendaftaran_seminar.NO_PS");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['NO_PS']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['ALAMAT']; ?></center></td>
                  <td class="center"><center><?php echo (jin_date_str($data2['TANGGAL_PENDAFTARAN_SEMINAR'])); ?></center></td>
                   <td class="center" ><center>

                  <button onclick="popup('system/wawancara/cetak_formulir_seminar.php?no_ps=<?php echo $data2['NO_PS']?>')" class="btn btn-small btn-primary")><i class="btn-icon-only icon-file"> Detail pendaftaran</i></button>


                  <a href="system/wawancara/delete_seminar.php?no_ps=<?php echo $data2['NO_PS']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a></center></td>
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