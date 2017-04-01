<?php
		include('../../../config/connect.php');
		$no = $_GET['no'];
		$query=mysql_query("SELECT * FROM registrasi WHERE NO_REGIS='$no'");
		$data=mysql_fetch_array($query);
		$nik=$data['NIK'];
		$delete1="DELETE FROM registrasi WHERE NO_REGIS='$no'";
		$delete2="DELETE FROM peserta WHERE NIK='$nik'";
		$execute_delete1 = mysql_query($delete1);
		$execute_delete2 = mysql_query($delete2);
		if($execute_delete1){
			echo"	<script language='javascript'>
								alert('Data peserta no_regis : ".$no." Berhasil di hapus dari tabel registrasi');
							</script>	
							";
							if($execute_delete2){
								echo"	<script language='javascript'>
								alert('Data peserta no_regis : ".$no." Berhasil di hapus dari tabel peserta');
								window.location='../../index.php?page=pendaftaran';
							</script>	
							";

							}else{
								echo"	<script language='javascript'>
								alert('gagal hapus dari tabel peserta');
								window.location='../../index.php?page=pendaftaran';
							</script>	
							";

							}
		}
		else{
			echo"	<script language='javascript'>
								alert('gagal hapus');
								window.location='../../index.php?page=pendaftaran';
							</script>	
							";
		}
?>