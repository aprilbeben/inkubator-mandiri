
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"style="width:800px">
            <div class="modal-dalog" style="width:800px" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h1>Data Pendaftaran </h1>
                    </div>
                    <div class="modal-body widget-content" >
                    <br>
                        <table id="modaldaftar" class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>NO REGISTRASI</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>NO TELEPON</th>
                                    <th>Status mengikuti Wawancara</th>
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
$query2=mysql_query("SELECT registrasi.* , peserta.* FROM registrasi inner join peserta on registrasi.NIK=peserta.NIK where registrasi.ID_REGULASI='$tahun' AND registrasi.STATUS_WAWANCARA='0' AND registrasi.KONFIRMASI='1' order by registrasi.NO_REGIS");
while($data2=mysql_fetch_array($query2)) {
                                    ?>
                                    <tr class="pilih" no-regis="<?php echo $data2['NO_REGIS'];  ?>" nama="<?php echo $data2['NAMA'];?>"alamat="<?php echo $data2['ALAMAT'];?>" no-telepon="<?php echo $data2['NO_TELEPON'];?>" nik1="<?php echo $data2['NIK'];?>">
                                        <td><?php echo $data2['NO_REGIS']; ?></td>
                                        <td><?php echo $data2['NAMA']; ?></td>
                                        <td><?php echo $data2['ALAMAT']; ?></td>
                                        <td><?php echo $data2['NO_TELEPON']; ?></td>
                                        <?php  $status=$data2['STATUS_WAWANCARA']; 
                                        if ($status==1){
                                            echo"<td> Sudah di wawancarai</td>";
                                        }
                                        else{
                                         echo"<td> Belum di wawancarai</td>";   
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