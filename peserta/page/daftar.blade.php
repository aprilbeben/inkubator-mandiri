<?php
	$query ="SELECT * FROM regulasi WHERE ID_REGULASI IN( SELECT MAX(ID_REGULASI) FROM regulasi)";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	$tahun=$data['ID_REGULASI'];
	
	$regis = mysql_query("SELECT * FROM registrasi WHERE ID_REGULASI='$tahun' AND KONFIRMASI='1';");
	$n_regis = mysql_num_rows($regis);
	
?>
       <section id="pendaftaran">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>PENDAFTARAN PELATIHAN</h2>
                    <hr class="star-primary">
                </div>
                </div>
                <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-info">
                        <div class="panel-heading">
                        INFO PENDAFTARAN
                    </div>
                    <div class="panel-body">
            <?php
            $tanggal_sekarang=date("Y-m-d");
					$p_awal=$data['PENDAFTARAN_AWAL'];
					$p_akhir=$data['PENDAFTARAN_AKHIR'];
					$tahun=$data['TAHUN'];
					$semester=$data['SEMESTER'];
					$sisa_kuota=$data['KUOTA']-$n_regis;
					if($data['STATUS_PENDAFTARAN']=='0' or $tanggal_sekarang<$p_awal){
					echo "<p align='center'>Pendaftaran Pelatihan Belum Di buka</p>";
				}
				else if($sisa_kuota==0){
						echo "<p align='center'>	Penerimaan Peserta Pelatihan Baru <b>Inkubator Mandiri</b> Periode Pelatihan : $tahun <b>
						 </b> Semester <b> $semester</b> <br> <b>kuota telah habis</p>";	
					}
					else if($p_akhir < $tanggal_sekarang){
						echo "<p align='center'>	Penerimaan Peserta Pelatihan Baru <b>Inkubator Mandiri</b> Periode Pelatihan : $tahun <b>
						 </b> Semester <b> $semester</b> <br> <b>Pendaftaran telah usai</p>";

					}
					else{ 

			?>
      		<p style='text-align: left'>
				
				Penerimaan Peserta Pelatihan Baru <b>Inkubator Mandiri</b> Periode Pelatihan : <b><?php echo($data['TAHUN']); ?></b> Semester <b><?php echo($data['SEMESTER']); ?></b> .<br> Periode Pendafataran Dimulai Dari Tanggal
					<b><?php echo (DateToIndo($data['PENDAFTARAN_AWAL'])); ?></b> sampai Tanggal
					<b><?php echo (DateToIndo($data['PENDAFTARAN_AKHIR'])); ?></b><br>
				Sisa kuota Penerimaan : <b><?php echo $data['KUOTA']-$n_regis; ?></b> peserta
				<br><hr>
				<a href='#daftarModal' class="portfolio-link" data-toggle="modal"><button type="button" class="btn btn-success" name='save'align='center'><i class="btn-icon-only icon-pencil"></i> Daftar</button></a>
			</p>	
			</div>
			<?php
				}
			?>
					

				
			</div>
			</div>
			</div>
			</div>
			</section>