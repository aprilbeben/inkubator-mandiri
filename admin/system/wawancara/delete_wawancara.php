<?php
		include('../../../config/connect.php');
		$no = $_GET['no'];
		$delete1="DELETE FROM wawancara WHERE NO_WAWANCARA='$no'";
		$delete2="DELETE FROM detail_wawancara WHERE NO_WAWANCARA='$no'";
		$execute_delete2 = mysql_query($delete2);
		$execute_delete1 = mysql_query($delete1);
		if($execute_delete1){
			echo"	<script language='javascript'>
								alert('Data Wawancara no_wawancara : ".$no." Berhasil di hapus dari tabel wawancara');
							</script>	
							";
							if($execute_delete2){
								echo"	<script language='javascript'>
								alert('Data wawancara no_wawancara : ".$no." Berhasil di hapus dari tabel detail_wawancara');
								window.location='../../index.php?page=wawancara';
							</script>	
							";

							}else{
								echo"	<script language='javascript'>
								alert('gagal hapus dari tabel detail_wawancara');
								window.location='../../index.php?page=wawancara';
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