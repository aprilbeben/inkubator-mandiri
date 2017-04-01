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
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke wawancara" class="tip-bottom">wawancara</a></div>
  </div>


<div class="row-fluid">
      <h3 align="center">
                  Wawancara Pelatihan Kewirausahaan Dan pelatihan praktis <br>
                  Tahun <span style="color: red;"><?php echo $tahun;?></span> 
                  Semester <span style="color: red;"><?php echo $semester;?></span> 
      </h3>
      <h4 align="center">
        Periode wawancara : <?php echo(DateToIndo($wawancara_awal));?> 
        - <?php echo(DateToIndo($wawancara_akhir));?>  
      </h4>
      
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Informasi Wawancara</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
          
          <div class="quick-actions_homepage">
    <ul class="quick-actions site-stats">
      <li class="bg_lb span3">   <b>jumlah peserta registrasi</b> <br> <h1> <?php echo $n_regis; ?> </h1></li>
      <li class="bg_lg span3">   <b>jumlah yang sudah wawancara</b> <br> <h1><?php echo $n_sudah_wawancara; ?></h1> </li>
      <li class="bg_ly span3">   <b>jumlah yang belum wawancara</b> <br> <h1><?php echo $n_belum_wawancara; ?></h1></li>
    </ul>
  </div>
        </div>
      </div>
    </div>
</div>


   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Wawancara</h5>
            <p style='float:right; height:100%;'>
        <a href='index.php?page=tambah_wawancara'><button type="submit" class="btn btn-success"><i class="icon-plus"></i>Tambah wawancara</button></a>
      </p>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No Wawancara</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Tanggal Wawancara</th>
                  <th>status Wawancara</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT *  FROM wawancara WHERE ID_REGULASI='$id' order by NO_WAWANCARA");
while($data2=mysql_fetch_array($query2)){
  $nik=$data2['NIK'];
  $data3=mysql_fetch_array(mysql_query("SELECT * FROM peserta WHERE NIK='$nik' "))
?>
                <tr>
                
                  <td><center><?php echo $data2['NO_WAWANCARA']; ?></center></td>
                  <td><center><?php echo $data3['NAMA']; ?></center></td>
                  <td><center><?php echo $data3['ALAMAT']; ?></center></td>
                  <td class="center"><center><?php echo (jin_date_str($data2['TANGGAL_WAWANCARA'])); ?></center></td>
                  <?php
                  $lulus=$data2['STATUS_LULUS_WAWANCARA'];
                  if($lulus=="1"){
                  echo"<td class='center'><center><b><span style='color:green;'> LULUS</span></b></center></td>";
                 }
                 elseif($lulus=="2"){
                  echo"<td class='center'><center><span style='color:red;'> <b>TIDAK LULUS</b></span></center></td>";
                 }
                 ?>

                   <td class="center" ><center>

                  <button onclick="popup('system/wawancara/cetak_form_wawancara.php?no_wawancara=<?php echo $data2['NO_WAWANCARA']?>')" class="btn btn-small btn-primary")><i class="btn-icon-only icon-file"> Detail Wawancara</i></button>


                  <a href="system/wawancara/delete_wawancara.php?no=<?php echo $data2['NO_WAWANCARA']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a></center></td>
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