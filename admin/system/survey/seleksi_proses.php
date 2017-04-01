<?php
if(isset($_GET['no_survey'])){
$query=mysql_query("SELECT survey.*,peserta.* FROM survey,peserta WHERE survey.NIK=peserta.NIK AND survey.NO_SURVEY='".$_GET['no_survey']."'");
$data=mysql_fetch_array($query);
$email=$data['EMAIL'];	
$konfirmasi=$_GET['status'];
$validasi=mysql_query("UPDATE survey SET STATUS_LULUS_SURVEY='$konfirmasi' WHERE NO_SURVEY='".$_GET['no_survey']."' ");

if( $konfirmasi=='1'){
require("Mail.php");
require("Mail/mime.php");
$from="aprilbeben@gmail.com";
$to       = $email;
$subject  = 'HASIL SELEKSI INKUBATOR MANDIRI';
$message  = 'dear Bpk/Ibu, ANDA TELAH LULUS PROSES SELEKSI PELATIHAN DI INKUBATOR MANDIRI SILAHKAN DATANG KE KANTOR INKUBATOR MANDIRI UNTUK MENANDATANGANI KONTRAK PELATIHAN YANG AKAN ANDA JALANI.  ';

$mime= new Mail_mime();
$mime->setTXTBody($message);
$mime-> setHTMLBody(nl2br($message));


$body=$mime->get();
$headers= $mime->headers(array(

	'From'    => $from,
	'To'	  => $to,
	'subject' => $subject
	));
$smtp =mail::factory('smtp',array(
	'host'    => "ssl://smtp.gmail.com",
	'port'	  =>"465",
	'auth'	  => true,
	'username'=>"aprilbeben@gmail.com",
	'password'=>"jahanam6"
	));

	$mail=$smtp->send($to,$headers,$body);
	if(PEAR::isError($mail)){
		echo("<script>
alert('".$mail->getMessage()."');
</script>
			");
	}
	else{
		echo("<script>
alert('success kirim email');
document.location.href='index.php?page=hasil_survey';
</script>
			");

	}



            }
if( $konfirmasi=='2'){
require("Mail.php");
require("Mail/mime.php");
$from="aprilbeben@gmail.com";
$to       = $email;
$subject  = 'HASIL SELEKSI INKUBATOR MANDIRI';
$message  = 'dear Bpk/Ibu, ANDA TIDAK LULUS PROSES SELEKSI PELATIHAN DI INKUBATOR MANDIRI. SILAHKAN MENGIKUTI PROSES SELEKSI DI TAHUN MENDATANG ';

$mime= new Mail_mime();
$mime->setTXTBody($message);
$mime-> setHTMLBody(nl2br($message));


$body=$mime->get();
$headers= $mime->headers(array(

	'From'    => $from,
	'To'	  => $to,
	'subject' => $subject
	));
$smtp =mail::factory('smtp',array(
	'host'    => "ssl://smtp.gmail.com",
	'port'	  =>"465",
	'auth'	  => true,
	'username'=>"aprilbeben@gmail.com",
	'password'=>"jahanam6"
	));

	$mail=$smtp->send($to,$headers,$body);
	if(PEAR::isError($mail)){
		echo("<script>
alert('".$mail->getMessage()."');
</script>
			");
	}
	else{
		echo("<script>
alert('success kirim email');
document.location.href='index.php?page=hasil_survey';
</script>
			");

	}


            }


            else{
             echo"<script language='javascript'>
                       alert('Gagal');
                       document.location.href='index.php?page=pendaftaran';
                    </script> ";
            }   

}




?>