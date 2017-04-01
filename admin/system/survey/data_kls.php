   <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Data Surveyor</h5>
          </div>
          <div class="widget-content">
            <table class="table table-bordered data-table" id="daftar">
              <thead>
                <tr>
                  <th>No_kls</th>
                  <th>ID Pegawai</th>
                  <th>Nama</th>
                   <th>aksi</th>
                </tr>
              </thead>

 <tbody>
 <?php 
$query2=mysql_query("SELECT kls.* , pegawai.* FROM kls inner join pegawai on pegawai.ID_PEGAWAI=kls.ID_PEGAWAI order by kls.NO_KLS");
while($data2=mysql_fetch_array($query2)){
?>
                <tr>
                
                  <td><center><?php echo $data2['NO_KLS']; ?></center></td>
                  <td><center><?php echo $data2['ID_PEGAWAI']; ?></center></td>
                  <td class="center"><center><?php echo $data2['NAMA']; ?></center></td>
                   <td class="center" ><center>

<button data-toggle="modal" value="<?php echo $data2['NO_KLS']; ?>" title="detail" class="detailKLS btn btn-primary" data-target="#detail_kls" onclick="detailKLS(this.value)">Detail</button>
                  <a href="system/survey/delete_kls.php?no_kls=<?php echo $data2['NO_KLS']?>" class="btn btn-danger btn-small" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="btn-icon-only icon-remove">Delete </i></a></center></td>
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


<div class='modal fade' id='detail_kls' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'style='width:800px'> 
           <div class='modal-dalog' style='width:800px' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                     <h1>Detail LIST SURVEY </h1>
                    </div>
                    <div class='modal-body widget-content' id='data_detail_kls'>
                   
</div>
</div>
</div>  