<?php
  $query1 ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql1 = mysql_query($query1);
  $data1 = mysql_fetch_array($sql1);
  $id=$data1['ID_REGULASI'];
  $tahun=$data1['TAHUN'];
  $semester=$data1['SEMESTER'];
  $pendaftaran_awal=$data1['PENDAFTARAN_AWAL'];
$pendaftaran_akhir=$data1['PENDAFTARAN_AKHIR'];

  $regis = mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$id'");
  $n_regis = mysql_num_rows($regis);

$regis_valid = mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$id' AND KONFIRMASI='1'");
  $n_regis_valid = mysql_num_rows($regis_valid);

  $regis_un = mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$id' AND KONFIRMASI='0'");
  $n_regis_un = mysql_num_rows($regis_un);

      ?>


  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=pendaftaran" title="pergi ke pendaftaran" class="tip-bottom">pendaftaran</a></div>
  </div>
   <div class="container-fluid">
   
<div class="row-fluid">
    <h3 align="center"> 
    Data Pendaftaran Pelatihan 
    Tahun <span style="color: red;"><?php echo $tahun;?></span> 
    Semester <span style="color: red;"><?php echo $semester;?></span> 
      </h3>

    <h4 align="center">Periode Pendaftaran :
          <?php echo (DateToIndo($pendaftaran_awal))?> - <?php echo (DateToIndo($pendaftaran_akhir))?>
    </h4>

      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Informasi Pendaftaran</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
          
          <div class="quick-actions_homepage">
    <ul class="quick-actions site-stats">
    <li class="bg_lb span2">   <a href=""><b>jumlah Pendaftar</b> <br> <h1><?php echo $n_regis; ?></h1>
    </a></li>
    <li class="bg_lb span2">   <a href=""><b>Jumlah Kuota</b> <br> <h1> <?php echo $data1['KUOTA']; ?> </h1>
    </a></li>
    <li class="bg_lb span2">   <a href=""><b>jumlah valid</b> <br> <h1><?php echo $n_regis_valid; ?></h1>
    </a> </li>
      <li class="bg_lg span2"> 
      <a href="index.php?page=data_konfirmasi"><b>belum konfirmasi</b> 
      <br> <h1><?php echo $n_regis_un; ?></h1> 
      </a></li>
      <li class="bg_lr span2">   
      <a href=""><b>Sisa Kuota</b> <br> <h1><?php echo $data1['KUOTA']-$n_regis_valid; ?></h1>
      </a></li>
    </ul>
  </div>
        </div>
      </div>
    </div>
</div>


    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Pendaftaran</h5>
            <p style='float:right; height:100%;'>
        <a href='index.php?page=tambah_pendaftaran'><button type="submit" class="btn btn-success"><i class="icon-plus"></i>Tambah pendaftaran</button></a>
      </p>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No Registrasi</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th> konfirmasi</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
include"../config/connect.php";
$query ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql = mysql_query($query);
  $data = mysql_fetch_array($sql);
  $tahun=$data['ID_REGULASI'];
$query2=mysql_query("SELECT registrasi.* , peserta.* FROM registrasi inner join peserta on registrasi.NIK=peserta.NIK WHERE registrasi.ID_REGULASI='$tahun' order by registrasi.NO_REGIS");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['NO_REGIS']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['ALAMAT']; ?></center></td>
                  <td class="center"><center><?php echo $data2['NO_TELEPON']; ?></center></td>
                  <td><center>
                  <?php
                  if($data2['KONFIRMASI']==0){
                    echo"belum di konfirmasi";
                  }
                    else if ($data2['KONFIRMASI']==1){
                      echo "<label style='color:green;'><strong>valid</strong></label>";
                    }
                     else if ($data2['KONFIRMASI']==2){
                      echo "<label style='color:red;'><strong> tidak valid</strong></label>";
                    }
                  ?>
                  </center>
                  </td>
                  <td class="center" ><center>

                  <a href="index.php?page=edit_pendaftaran&no_regis=<?php echo $data2['NO_REGIS']?>" class="btn btn-small btn-warning")><i class="btn-icon-only icon-pencil"> Edit</i></a>


                  <a href="system/pendaftaran/delete.php?no=<?php echo $data2['NO_REGIS']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a>
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