   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Pegawai</h5>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT pegawai.* , user.* FROM pegawai inner join user on pegawai.ID_PEGAWAI=user.ID_PEGAWAI order by pegawai.ID_PEGAWAI");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['ID_PEGAWAI']; ?></center></td>
                  <td><center><?php echo $data2['NAMA']; ?></center></td>
                  <td class="center"><center><?php echo $data2['JABATAN']; ?></center></td>
                   <td class="center" ><center>

<a data-toggle="modal" data-id="<?php echo $data2['ID_PEGAWAI']; ?>" nama="<?php echo $data2['NAMA']; ?>" alamat="<?php echo $data2['ALAMAT']; ?>" telepon="<?php echo $data2['NO_TELEPON']; ?>" title="detail" class="detailPegawai btn btn-primary" href="#myModal">Detail</a>
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


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"style="width:800px">
            <div class="modal-dalog" style="width:800px" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h1>Detail Pegawai </h1>
                    </div>
                    <div class="modal-body widget-content" >
                    <table>
                    <tr>
     <td>ID PEGAWAI</td>
<td>
     <input type="text" name="id_pegawai" id="id_pegawai" value=""/>
 </td>
</tr>
    <tr>
     <td>NAMA</td>
<td>
     <input type="text" name="nama" id="nama" value=""/>
 </td>
</tr>
  <tr>
     <td>ALAMAT</td>
<td>
     <input type="text" name="alamat" id="alamat" value=""/>
 </td>
</tr>
  <tr>
     <td>NO TELEPON</td>
<td>
     <input type="text" name="no_telepon" id="no_telepon" value=""/>
 </td>
</tr>
</table>
</div>




</div>
</div>
</div>   