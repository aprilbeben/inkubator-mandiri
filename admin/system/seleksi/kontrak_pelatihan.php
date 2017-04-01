<?php 
                        include('../../../config/connect.php');
                        include('../../../config/fungsi_tanggal.php');
                        
$no=$_GET['id_regulasi'];
$no_survey=$_GET['no_survey'];;
$tanggal=date("Y-m-d");
$data4 =  mysql_fetch_array(mysql_query("SELECT * FROM regulasi WHERE id_regulasi='".$_GET['id_regulasi']."'"));
    $con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"db_inkubator");
$sql1="SELECT survey.*,peserta.*,pendaftaran_seminar.*, detail_pendaftaran_seminar.* FROM survey INNER JOIN pendaftaran_seminar ON pendaftaran_seminar.NIK=survey.NIK JOIN peserta ON survey.NIK=peserta.NIK  INNER JOIN detail_pendaftaran_seminar ON detail_pendaftaran_seminar.NO_PS=pendaftaran_seminar.NO_PS WHERE  NO_SURVEY='".$no_survey."'";
$result = mysql_query($sql1);   
$data=mysql_fetch_array($result);       
        ?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm" style="PAGE-BREAK-BEFORE: always;">
   <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span>
    <br>
    <br>
    <table style="width: 75%;border-collapse: collapse" align="center">
        <thead >
            <tr>
                <th style="width:10%;"  ><img style="width:100px;"src='../../asset/img/bjb.png' /> &nbsp;&nbsp;</th>
                
                <th style="width:100%;"><p align="center"><span style="font-family:Arial, Helvetica, sans-serif; font-size:20px">KONTRAK PELATIHAN</span><br />
PELATIHAN WIRAUSAHA ANGKATAN <?php echo $data4['SEMESTER'];?> TAHUN <?php echo $data4['TAHUN'];?> 
<BR>BANK BJB BANDUNG<br>
</p></th>
<th style="width:10%;" align="left"> <img align="left" style="width:100px;"src='../../asset/img/pkpu.png' /></th>
            </tr>
            <tr>
                <th style="width: 50%;" colspan="3"><br />
                <span>---------------------------------------------------------------------------------------------------------------------------------------------------</span><br><br></th>
            </tr>
        </thead>

        <tbody>

 <tr>
                    
                <td style="width: 100%;margin-right:10px;text-valign:top; " colspan="3">
                  <p align="justify"><span>Pada hari ini, tanggal <b><?php echo (DateToIndo($tanggal));?></b> bertempat di PKPU Bandung Jl. Cikutra No.138 Bandung, diadakan kontrak belajar antara:</span></p>
                    <p align="justify"><br>
                      <span>
1.  PKPU BANDUNG,  berkantor di Jl. Cikutra No.138 Bandung, dalam hal ini diwakili oleh Ganjar Mutaqin, S.Sos.I dalam jabatannya sebagai Manager PKPU Bandung dan selanjutnya sebagai PIHAK PERTAMA.</span></p>
                    <p align="justify"><br>
                      <span>
2.  Nama ..<b><?php echo $data['NAMA'] ?></b>.. bertempat di ....<b><?php echo $data['ALAMAT'] ?></b>......., dan selanjutnya disebut PIHAK KEDUA.
Secara bersama-sama disebut  “PARA PIHAK”</span><br>
</p>
                    <p align="justify"><span>Para pihak dalam kedudukannya sebgaimana tersebut di atas, terlebih dahulu mempertimbangkan hal-hal sebagai berikut :</span></p>
                    <p align="justify"><span> a.  Bahwa PIHAK PERTAMA adalah lembaga kemanusiaan nasional bermaksud mengentaskan pengangguran dan kemiskinan, yang telah disahkan oleh pemerintah RI sebagai salah satu lembaga Amil Zakat Nasional dengan SK.  Menag RI No. 441 Tahun 2001.
                      </span></p>
                    <p align="justify"><span>b.  Bahwa  PIHAK KEDUA adalah peserta ……………………………
                    </span></p>
                    <p align="justify"><span>c.  Bahwa  PIHAK PERTAMA dan PIHAK KEDUA telah setuju untuk melakukan KONTRAK BELAJAR.</span><br>
                      </p>
                    <p align="justify">Berdasarkan hal-hal tersebut di atas maka para pihak sepakat untuk mengikatkan diri satu kepada yang lain dalam perjanjian ini berdasarkan prinsip saling menguntungkan dan saling menghormati kegiatan masing-masing dengan ketentuan dan syarat seperti yang tertuang dalam pasal-pasal sebagai berikut :</p>
                    <p align="center"><strong> PASAL  1</strong>                      </p>
                    <p align="center"><strong>PENGERTIAN DAN ISTILAH                      </strong></p>
                    <p align="justify">Dalam perjanjian ini yang dimaksud dengan </p>
                    <p align="justify">: 
                      a.  “KONTRAK BELAJAR” adalah perjanjian dan syarat yang tercantum dalam pelatihan keterampilan yang bersifat mengikat.                      </p>
                    <p align="justify">b.  “PELATIHAN KETERAMPILAN” adalah proses pembelajaran praktis dan keahlian teknis tentang suatu keterampilan.</p>
                    <p align="justify"> c.  “KONTRAK BELAJAR PELATIHAN KETERAMPILAN” adalah perjanjian yang disepakati dan bersifat mengikat dalam proses pembelajaran pelatihan keterampilan untuk terselenggaranya proses KBM yang optimal.</p>
                    <p align="justify"> d.  “KELAS REGULER” adalah kelas untuk peserta yang tidak dikenakan biaya pendidikan/ gratis.
                      
                     </p></td>
          </tr>
        </tbody>
      
    </table>
   
</page>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm" style="PAGE-BREAK-BEFORE: always;">
<<p align="center" class="style2">PASAL 2</p>
                    <p align="center" class="style2"> LINGKUP KONTRAK BELAJAR </p>
                      <p align="justify">
                      Ruang lingkup kontrak belajar ini meliputi : Masa kontrak belajar, Hak dan Kewajiban serta sanksi.</p>
                    <p align="center"><strong> PASAL 3</strong></p>
                    <p align="center"><strong> MASA KONTRAK BELAJAR</strong></p>
                    <p align="justify"> 1.  Masa kontrak belajar adalah lamanya waktu belajar yang ditempuh oleh peserta pelatihan                    </p>
                    <p align="justify">2.  Waktu belajar pelatihan keterampilan adalah selama …………………….. terhitung mulai hari pertama kegiatan belajar mengajar (KBM)                     </p>
                    <p align="justify">3.  Peserta dapat meminta izin/sakit tidak hadir karena alasan yang syar’i sebanyak dalam waktu satu bulan hanya 1 (satu), kecuali sakit.                      </p>
                    <p align="center"><strong>PASAL 4</strong></p>
                    <p align="center"><strong> HAK DAN KEWAJIBAN PARA PIHAK </strong></p>
                    <p align="justify">1.  HAK PARA PIHAK                     </p>
                    <p align="justify">A.  Hak PIHAK PERTAMA:
                      PIHAK PERTAMA berhak:                   </p>
                    <p align="justify">1.  Menentukan ketentuan, syarat dan prosedur pelatihan keterampilan</p>
                    <p align="justify"> 2.  Menentukan aturan-aturan yang mendukung terselenggaranya proses KBM yang optimal                      </p>
                    <p align="justify">3.  Menerima sejumlah jaminan dari peserta yang ukurannya disepakati                   </p>
                    <p align="justify">B.  Hak PIHAK KEDUA:                   </p>
                    <p align="justify">PIHAK KEDUA berhak:</p>
                    <p align="justify"> 1.  Mendapatkan bantuan berupa pelatihan keterampilan bebas biaya/gratis                      </p>
                    <p align="justify">2.  Memanfaatkan fasilitas yang telah disediakan</p>
                    <p align="justify"> 3.  Mengambil kembali jaminan apabila telah selesai menempuh pelatihan sesuai pasal 3                     </p>
                    <p align="justify">4.  Memberi usul dan saran yang produktif untuk terselenggaranya KBM yang optimal
                      
                      2.  KEWAJIBAN PARA PIHAK</p>
                    <p align="justify"> A.  Kewajiban PIHAK PERTAMA                   </p>
                    <p align="justify">1.  Menyediakan sejumlah dana untuk membiayai pelatihan keterampilan sehingga bebas biaya atau gratis</p>
                    <p align="justify"> 2.  Menyediakan sarana dan prasarana yang memadai untuk terselenggaranya KBM                      </p>
                    <p align="justify">3.  Memelihara jaminan yang telah diserahkan peserta
                      
                      B.</p>
                    <p align="justify"> Kewajiban PIHAK KEDUA                     </p>
                    <p align="justify">1.  Mengikuti pelatihan sampai selesai sesuai pasal 3                      </p>
                    <p align="justify">2.  Mengikuti Kegiatan Taklim Bisnis Yang diadakan oleh PKPU                   </p>
                    <p align="justify">3.  Menjaga Nama Baik Lembaga                      </p>
                    <p align="justify">4.  Menjaga Alat Pelatihan dan Pendidikan Selama KBM berlangsung </p>
                    <p align="justify">5.  Memberikan bukti ketidakhadiran dalam bentuk surat izin dan sejenisnya kepada instruktur jika yang bersangkutan tidak dapat mengikuti kegiatan belajar                     </p>
                    <p align="justify">6.  Memenuhi segala aturan kedisiplinan selama proses belajar mengajar                     </p>
                    <p align="justify">7.  Menyerahkan sejumlah jaminan yang nilainya disepakati                      </p>
                    <p align="center"><strong>PASAL 5
                      </strong></p>
                    <p align="center"><strong>SANKSI</strong> </p>
                    <p align="justify">1.  Sanksi adalah akibat yang harus diterima PIHAK PERTAMA dan PIHAK KEDUA atas kelalaiannya dalam melaksanakan kewajiban, sbb :</p>
                    <p align="justify"> A.  SANKSI PIHAK PERTAMA :</p>
                    <p align="justify"> i.  Apabila  PIHAK PERTAMA tidak melaksanakan Pasal 4 Point 2.A1 Dan 2A2 maka peserta dapat mengundurkan diri dan mengambil kembali jaminan
                      
                      ii. Apabila PIHAK PERTAMA lalai dalam memelihara jaminan peserta sehingga nilai baik kualitas atau kuantitasnya berkurang, maka PIHAK PERTAMA harus menggantinya                    </p>
                    <p align="justify">B.  SANKSI PIHAK KEDUA:                    </p>
                    <p align="justify">i.  Apabila PIHAK KEDUA mengundurkan diri atau dikeluarkan dalam masa pelatihan, maka :
                      1.  PIHAK KEDUA harus mengganti biaya, selama PIHAK KEDUA mengikuti pelatihan dikali Rp 25.000 per pertemuan
                      2.  Jaminan yang telah diserahkan menjadi hangus senilai Rp 100.000,-</p>
                    <p align="justify"> a.  Bila berupa uang, bila lebih dikembalikan, bila kurang PIHAK KEDUA harus membayar,                    </p>
                    <p align="justify">b.  Bila berupa barang, harus ditebus senilai Rp 100.000 atau dijual</p>
                    <p align="justify"> c.  Bila berupa ijazah, harus ditebus senilai Rp 100.000                      </p>
                    <p align="justify">ii. Apabila PIHAK KEDUA dalam masa pelatihan tidak hadir/alpa tanpa izin maka akan diberi peringatan lisan, dan apabila terulang maka secara bertahap akan mendapat Surat Peringatan I, II, dan III.  Dan apabila mendapatkan Surat Peringatan ke III maka akan dikeluarkan dan harus memenuhi sanksi sesuai point di atas.
                      iii.    Mengganti segala bentuk kerusakan yang terjadi pada fasilitas pembelajaran yang disebabkan oleh kelalaian pihak kedua.
                      
                      PASAL 6
                      PENYELESAIN PERSELISIHAN
                      Dalam hal terjadinya perbedaan atau perselisihan yang timbul akibat dari pelaksanaan perjanjian ini, PARA PIHAK menyelesaikan secara musyawarah untuk mufakat.
                      Demikian Perjanjian ini dibuat dalam rangka memenuhi hak dan kewajiban masing-masing agar membawa manfaat yang luas bagi PARA PIHAK</p>
</page>
 <p style="margin-left: 400px;">Bandung , <?php echo (DateToIndo($tanggal));?>
    <br>Calon Peserta,
    <br><br><br><br><br><br>
    () </p>