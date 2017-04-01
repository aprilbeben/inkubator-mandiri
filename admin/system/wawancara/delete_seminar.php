<?php
		include('../../../config/connect.php');
		$no = $_GET['no_ps'];
		$delete1="DELETE FROM pendaftaran_seminar WHERE NO_PS='$no'";
		$delete2="DELETE FROM detail_pendaftaran_seminar WHERE NO_PS='$no'";
		$execute_delete2 = mysql_query($delete2);
		$execute_delete1 = mysql_query($delete1);
		if($execute_delete1){
			echo"	<script language='javascript'>
								alert('Data Pendaftaran Seminar no_pendaftaran : ".$no." Berhasil di hapus dari tabel pendaftaran_seminar');
							</script>	
							";
							if($execute_delete2){
								echo"	<script language='javascript'>
								alert('Data pendaftaran Seminar : ".$no." Berhasil di hapus dari tabel detail_pendaftaran_seminar');
								window.location='../../index.php?page=data_seminar';
							</script>	
							";

							}else{
								echo"	<script language='javascript'>
								alert('gagal hapus dari tabel detail_wawancara');
								window.location='../../index.php?page=data_seminar';
							</script>	
							";

							}
		}
		else{
			echo"	<script language='javascript'>
								alert('gagal hapus');
								window.location='../../index.php?page=wawancara';
							</script>	
							";
		}
?>