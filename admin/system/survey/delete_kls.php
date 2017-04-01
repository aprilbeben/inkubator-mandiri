<?php
		include('../../../config/connect.php');
		$no = $_GET['no_kls'];
		$delete1="DELETE FROM kls WHERE NO_KLS='$no'";
		$delete2="DELETE FROM detail_kls WHERE NO_KLS='$no'";
		$execute_delete2 = mysql_query($delete2);
		$execute_delete1 = mysql_query($delete1);
		if($execute_delete1){
			echo"	<script language='javascript'>
								alert('Data Pendaftaran Seminar no_pendaftaran : ".$no." Berhasil di hapus dari tabel KLS');
							</script>	
							";
							if($execute_delete2){
								echo"	<script language='javascript'>
								alert('Data pendaftaran Seminar : ".$no." Berhasil di hapus dari tabel DETAIL KLS');
								window.location='../../index.php?page=data_kls';
							</script>	
							";

							}else{
								echo"	<script language='javascript'>
								alert('gagal hapus dari tabel detail_wawancara');
								window.location='../../index.php?page=data_kls';
							</script>	
							";

							}
		}
		else{
			echo"	<script language='javascript'>
								alert('gagal hapus');
								window.location='../../index.php?page=data_kls';
							</script>	
							";
		}
?>