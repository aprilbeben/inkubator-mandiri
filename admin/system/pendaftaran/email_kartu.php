	<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
   <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
    <br>
    <br>
	<table style="width: 80%;border-collapse: collapse" align="center">
        <thead>
            <tr>
                <th style="width: 100%;"><img style="width: 30%;"  src='asset/img/im.png' /></th>
                <th style="width: 100%;"><span style="font-size: 16px;">INKUBATOR MANDIRI</span><br><span style="font-size: 15px;">BANDUNG</span><br>
				<span style="font-size: 10px;">Jl. Cikutra No.138 <br>Bandung 
    Telp. (022) 720 5501 </span><br><br>
					<span style="width: 100%;height:50px; text-align: center; border: solid 1px #337722; background: #CCFFCC">KARTU WAWANCARA
				</span></th>
            </tr>
			<tr>
                <th style="width: 50%; column-span: 3;"><span>---------------------------------------------------------------------------------------------------------------------------------------------------</span><br><br></th>
               
            </tr>
        </thead>
        <tbody>

 <tr>

					<?php 
						$registrasi=mysql_fetch_array(mysql_query("SELECT * FROM registrasi WHERE NO_REGIS='".$_GET['no_regis']."'"));	
						$data = mysql_fetch_array(mysql_query("SELECT * FROM peserta WHERE NIK='".$registrasi['NIK']."'"));
						$data_reg = mysql_fetch_array(mysql_query("SELECT * FROM regulasi "));
						
					?>
                 <td style="width: 100%;margin-right:10px;text-valign:top;">
					<h3 style='border: 1px;margin-top:-10px'>No Pendaftaran :<?php echo $_GET['no_regis'];?></h3>
					<span>Nama : <?php echo $data['NAMA'];?></span><br>
					<span>Alamat : <?php echo $data['ALAMAT'];?></span><br>
					<span>No.Telephone : <?php echo $data['NO_TELEPON'];?></span><br>
						<?php
						if($data['JENIS_KELAMIN']=="L"){
							echo"
					<span>Jenis Kelamin : LAKI-LAKI  </span>";}
						if($data['JENIS_KELAMIN']=="P"){
							echo"
					<span>Jenis Kelamin : PEREMPUAN  </span>";
					}
					?>
					<br>
					<br>
					<h3>Tanggal Wawancara</h3><br>
					<span>Awal Wawancara : <?php echo (DateToIndo($data_reg['WAWANCARA_AWAL']));?></span><br>
					<span>Akhir Wawancara : <?php echo (DateToIndo($data_reg['WAWANCARA_AKHIR']));?></span>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
            </tr>
        </tfoot>
    </table>
	<span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
	# Print Kertas ini sebagai KARTU WAWANCARA anda.<br><br>
	#Jangan Sampai Terlewat Periode Wawancara anda .
	<br><br>
    <br>
</page>
