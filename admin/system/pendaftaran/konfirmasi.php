<?php
if(isset($_GET['no_regis'])){
	$no_regis=$_GET['no_regis'];
	$id_pegawai=$_GET['id_pegawai'];
	$tanggal=date('Y-m-d');
$query=mysql_query("SELECT registrasi.*,peserta.* FROM registrasi,peserta WHERE registrasi.NIK=peserta.NIK AND registrasi.NO_REGIS='".$_GET['no_regis']."'");
$data=mysql_fetch_array($query);
$email=$data['EMAIL'];	
$konfirmasi=$_GET['konfirmasi'];
$validasi=mysql_query("UPDATE registrasi SET KONFIRMASI='$konfirmasi' WHERE NO_REGIS='".$_GET['no_regis']."' ");
$simpan_konfirmasi=mysql_query("INSERT INTO konfirmasi (NO_REGIS,ID_PEGAWAI,TANGGAL_KONFIRMASI) VALUES ('$no_regis','$id_pegawai','$tanggal')");
if( $konfirmasi=='1'){

require("Mail.php");
require("Mail/mime.php");
require_once('asset/html2pdf/html2pdf.class.php');
ob_start();
require('system/pendaftaran/email_kartu.php');
$html=ob_get_clean();
$pdf= new HTML2PDF('P','A4');
$pdf->writeHTML($html);
$pdfoutput=$pdf->Output('kartuwawancara.pdf',true) ;

$filename="kartu_wawancara.pdf";
$from="inkubatormandiri@gmail.com";
$to       = $email;
$subject  = 'REGISTRASI INKUBATOR MANDIRI';
$message  = 'dear Bpk/Ibu, terimakasih telah melakukan pendaftaran seleksi pelatihan di Inkubator Mandiri, ini adalah kartu wawancara anda  ';

$mime= new Mail_mime();
$mime->setTXTBody($message);
$mime-> setHTMLBody(nl2br($message));
$mime->addAttachment($pdfoutput,"Aplication/pdf",$filename, false);

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
	'username'=>"inkubatormandiri@gmail.com",
	'password'=>"loop12345"
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
document.location.href='index.php?page=pendaftaran';
</script>
			");

	}


            }
if( $konfirmasi=='2'){
require("Mail.php");
require("Mail/mime.php");
$from="inkubatormandiri@gmail.com";
$to       = $email;
$subject  = 'REGISTRASI INKUBATOR MANDIRI';
$message  = 'dear Bpk/Ibu, Data Yang Anda kirim Pada Saat Registrasi Tidak Valid Silahkan Registrasi Kembali Dengan Data Yang Valid  ';

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
	'username'=>"inkubatormandiri@gmail.com",
	'password'=>"loop12345"
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
document.location.href='index.php?page=pendaftaran';
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