
<div class="modal fade" id="modal_cari_kls" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"style="width:800px">
            <div class="modal-dalog" style="width:800px" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h1>Data Peserta </h1>
                    </div>
                    <div class="modal-body widget-content" >
                    <br>
                        <table id="tabel_modal_survey" class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>NO KLS</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>NO TELEPON</th>
                                    <th>Status survey</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    
                                mysql_connect('localhost', 'root', '');
    $query ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
  $sql = mysql_query($query);
  $data = mysql_fetch_array($sql);
                                mysql_select_db('db_inkubator');
  $tahun=$data['ID_REGULASI'];
$query2=mysql_query("SELECT kls.* ,detail_kls.*, peserta.*  FROM kls inner join detail_kls on kls.NO_KLS=detail_kls.NO_KLS JOIN peserta ON detail_kls.NIK=peserta.NIK where kls.ID_REGULASI='$tahun' AND detail_kls.STATUS_SUDAH_SURVEY='0' AND kls.ID_PEGAWAI='".$_SESSION['id_pegawai']."'");
while($data2=mysql_fetch_array($query2)) {
                                    ?>
                                    <tr class="kls_survey" kls="<?php echo $data2['NO_KLS'];  ?>" nik="<?php echo $data2['NIK'];  ?>" nama="<?php echo $data2['NAMA'];?>"alamat="<?php echo $data2['ALAMAT'];?>" no-telepon="<?php echo $data2['NO_TELEPON'];?>">
                                        <td><?php echo $data2['NO_KLS']; ?></td>
                                        <td><?php echo $data2['NAMA']; ?></td>
                                        <td><?php echo $data2['ALAMAT']; ?></td>
                                        <td><?php echo $data2['NO_TELEPON']; ?></td>
                                        <?php  $status=$data2['STATUS_SUDAH_SURVEY']; 
                                        if ($status==1){
                                            echo"<td> Sudah di Survey</td>";
                                        }
                                        else{
                                         echo"<td> Belum di Survey</td>";   
                                        }

                                        ?>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>