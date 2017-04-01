<?php
$no = $_GET['no_regis'];
$query=mysql_query("SELECT registrasi.*,peserta.* FROM registrasi,peserta WHERE registrasi.NO_REGIS='$no' and registrasi.NIK=peserta.NIK");
$data=mysql_fetch_array($query);
$id_pegawai=$_SESSION['id_pegawai'];
?>
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="kembali ke beranda" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="index.php?page=pendaftaran" title="pergi ke pendaftaran" class="tip-bottom">pendaftaran</a><a href="index.php?page=data_konfirmasi" title="pergi ke data konfirmasi" class="tip-bottom">data konfirmasi</a>
   <a href="#" title="konfirmasi pendaftaran" class="tip-bottom"> konfirmasi pendaftaran</a>
   </div>
   <center>
   <h2>Konfirmasi Pendaftaran</h2>
   <h3>No REGISTRASI <?php echo $data['NO_REGIS'];?></h3>
  </center>
  </div>
       <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Data Pendaftaran</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span6">
              <table>
              <tr>
              <td>
                <img src="../peserta/image/data_pendaftar/<?php echo $data['NO_REGIS'];?>/<?php echo $data['PHOTO_KTP'];?>" style="width:300px;"/>
                </td>
                </tr>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                      <td class="width30">NIK:</td>
                      <td class="width70"><strong><?php echo $data['NIK']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td><strong><?php echo $data['NAMA']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td><strong><?php echo $data['ALAMAT']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td><strong><?php echo (jin_date_str($data['TANGGAL_LAHIR'])); ?></strong></td>
                    </tr>
                    <?php
                    if($data['JENIS_KELAMIN']=='L'){
                      echo"
                        <tr>
                      <td>Jenis Kelamin</td>
                      <td><strong>Laki Laki</strong></td>
                    </tr>
                      ";
                    }
                    else{
                      echo"
                        <tr>
                      <td>Jenis Kelamin</td>
                      <td><strong>Perempuan</strong></td>
                    </tr>
                      ";
                    }

                    ?>
                    <tr>
                  <td class="width30">No Telepon :</td>
                    <td class="width70"><strong><?php echo $data['NO_TELEPON']; ?></strong></td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>

      
       <div class="pull-right">
                  <br>
                  <table>
                  <tr>
                  <td>
                  <a class="btn btn-success btn-large pull-right" href="index.php?page=konfirmasi_pendaftaran_proses&no_regis=<?php echo $no?>&konfirmasi=1&id_pegawai=<?php echo $id_pegawai ?>"title="konfirmsai data ini" onclick="return confirm('ANDA YAKIN DATA INI VALID ... ?')">Valid</a>
                   </td>
                    <td>
                  <a class="btn btn-danger btn-large pull-right" href="index.php?page=konfirmasi_pendaftaran_proses&no_regis=<?php echo $no?>&konfirmasi=2&id_pegawai=<?php echo $id_pegawai ?>" title="konfirmsai data ini" onclick="return confirm('ANDA YAKIN DATA INI TIDAK VALID ... ?')">Tidak Valid</a>
                  </td>
                   </tr>
                   </table> 
                   </div>
          
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        