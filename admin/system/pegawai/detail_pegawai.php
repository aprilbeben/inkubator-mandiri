
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
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>JABATAN</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
                <tr>
                
                  <td><center><?php echo $data2['ID_PEGAWAI']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td><center><?php echo $data2['ALAMAT']; ?></center></td>
                  <td class="center"><center><?php echo $data2['JABATAN']; ?></center></td>
                   <td class="center" ><center>

                  <a href="system/pegawai/detail_pegawai.php?id_pegawai=<?php echo $data2['ID_PEGAWAI']?>" class="btn btn-primary btn-small" title="Detail Pegawai"><i class="btn-icon-only icon-file"> detail</i></a>

                  <a href="system/wawancara/delete_seminar.php?no_ps=<?php echo $data2['no_ps']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a></center></td>
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