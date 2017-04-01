
   <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=wawancara" title="pergi ke wawancara" class="tip-bottom">wawancara</a><a href="index.php?page=soal_wawancara" title="pergi ke Soal wawancara" class="tip-bottom">Soal Wawancara</a></div>
  </div>

   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Soal Wawancara</h5>
            <p style='float:right; height:100%;'>
        <a href='index.php?page=tambah_soal'><button type="submit" class="btn btn-success"><i class="icon-plus"></i>Tambah Soal</button></a>
      </p>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No Soal</th>
                  <th>Soal</th>
                  <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT * FROM soal_wawancara ");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['KODE_SOAL']; ?></center></td>
                  <td><center><?php echo $data2['SOAL']; ?></center></td>
                   <td class="center" ><center>

                  <a href="index.php?page=edit_soal&no=<?php echo $data2['KODE_SOAL']?>" class="btn btn-small btn-warning")><i class="btn-icon-only icon-pencil"> Edit</i></a>


                  <a href="system/wawancara/delete_soal.php?no=<?php echo $data2['KODE_SOAL']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a></center></td>
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