<?php
    include('verifikasi.php');
    include('../config/connect.php');
    include('../config/fungsi_tanggal.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Inkubator Mandiri</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

<link rel="stylesheet" href="asset/css/bootstrap.min.css" />
<link rel="stylesheet" href="asset/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="asset/css/uniform.css" />
<link rel="stylesheet" href="asset/css/select2.css" />
<link rel="stylesheet" href="asset/css/fullcalendar.css" />
<link rel="stylesheet" href="asset/css/matrix-style.css" />
<link rel="stylesheet" href="asset/css/matrix-media.css" />
<link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  
</head>

<body>


<?php 
    if(@$_SESSION['level'] == 1){
        include('system/menu/menu_manajer.php');
    }else if(@$_SESSION['level'] == 2){
        include('system/menu/menu_humas.php');
    }else if(@$_SESSION['level'] == 3){
        include('system/menu/menu_survey.php');
    }
?>
<div id="content">
  <?php  include('system/route/routes.php'); ?>



 <!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> @2016 inkubator Mandiri </div>
</div>
</div>

<!--end-Footer-part-->

 <!-- Plugin JavaScript -->
<script src="asset/js/excanvas.min.js"></script> 
<script src="asset/js/jquery.min.js"></script> 
<script src="asset/js/jquery.ui.custom.js"></script> 
<script src="asset/js/bootstrap.min.js"></script> 
<script src="asset/js/jquery.uniform.js"></script> 
<script src="asset/js/select2.min.js"></script> 
<script src="asset/js/jquery.dataTables.min.js"></script> 
<script src="asset/js/matrix.js"></script>  
<script src="asset/js/matrix.tables.js"></script> 

<script src="asset/js/jquery.validate.js"></script> 
<script src="asset/js/jquery.wizard.js"></script> 
<script src="asset/js/matrix.wizard.js"></script>

<script src="asset/js/jquery.flot.min.js"></script> 
<script src="asset/js/jquery.flot.resize.min.js"></script> 
<script src="asset/js/jquery.peity.min.js"></script>

<script src="asset/js/fullcalendar.min.js"></script> 
<script src="asset/js/matrix.calendar.js"></script> 
<script src="asset/js/matrix.chat.js"></script> 


<script src="asset/js/matrix.popover.js"></script> 


<script src="asset/js/jquery.flot.pie.min.js"></script> 
<script src="asset/js/masked.js"></script> 
<script src="asset/js/wysihtml5-0.3.0.js"></script> 
<script src="asset/js/bootstrap-wysihtml5.js"></script> 
        <script type="text/javascript">

            $(document).on('click', '.pilih', function (e) {
                document.getElementById("no_regis").value = $(this).attr('no-regis');
                document.getElementById("nik1").value = $(this).attr('nik1');
                document.getElementById("nama").value = $(this).attr('nama');
                document.getElementById("alamat").value = $(this).attr('alamat');
                document.getElementById("no_telepon").value = $(this).attr('no-telepon');
                $('#myModal').modal('hide');
            });

            $(document).ready(function() {
   $('#modaldaftar').DataTable();
} );
        </script>       
 <script>
$(document).ready(function() {
   $('#daftar').DataTable();
} );
</script>
          <script type="text/javascript">
                 $(document).ready(function () {
                       $('#jenis').hide();
                       $('#stat_pegawai').hide();
                       $('#lama').hide();
                       $('#penghasilan').hide();
                       $('#lama_nganggur').hide();
                       $('#sumber').hide();
                       $('#pengalaman_bekerja').hide();
                        $('#pengalaman_bekerja_detail').hide();

                    $('#status_pekerjaan_b').click(function () {
                       $('#jenis').show();
                       $('#stat_pegawai').show();
                       $('#lama').show();
                       $('#penghasilan').show();
                       $('#lama_nganggur').hide();
                       $('#sumber').hide();
                       $('#pengalaman_bekerja').hide();
                        $('#pengalaman_bekerja_detail').hide();
                });
                $('#status_pekerjaan_t').click(function () {
                      $('#jenis').hide();
                       $('#stat_pegawai').hide();
                       $('#lama').hide();
                       $('#penghasilan').hide();
                       $('#lama_nganggur').show();
                       $('#sumber').show();
                       $('#pengalaman_bekerja_detail').show();
                        $('#pengalaman_bekerja').show();
                 });
               });
</script>
<script type="text/JavaScript" src="asset/fungsi_tambah_baris.js"></script>
<script type="text/JavaScript" src="asset/fungsi_soal.js"></script>

<!--<script type="text/javascript">
                 $(document).ready(function () {
                       $('#pelatihan_praktis_y').hide();
                       $('#pelatihan_praktis_t').hide();

                       $('#minat_y').click(function () {
                      $('#pelatihan_praktis_y').show();
                      $('#pelatihan_praktis_t').hide();
                    });

                       $('#minat_t').click(function () {
                      $('#pelatihan_praktis_y').hide();
                      $('#pelatihan_praktis_t').show();
                      $('#pelatihan_tidak').checked==true;
                    });
});
                       </script>
-->

<script type="text/JavaScript">
function show_praktis()
{
if (document.form_seminar.minat.value == "Y"){document.getElementById('praktis').innerHTML = "<select name='praktis'><option value='1'>cukur</option><option value='2'>Salon Muslimah</option><option value='3'>Desain Grafis</option><option value='4'>Menjahit</option><option value='5'>Sablon</option></select>"}
if (document.form_seminar.minat.value == "T"){document.getElementById('praktis').innerHTML = "<input type='text' name='praktis' value='tidak memilih' readonly>"}
}
</script>

     <script>
$(document).on("click", ".detailPegawai", function () {
     var idPegawai = $(this).data('id');
     var alamat = $(this).attr('alamat');
     var telepon = $(this).attr('telepon');
     var nama = $(this).attr('nama');
     $(".modal-body #id_pegawai").val( idPegawai );
     $(".modal-body #alamat").val( alamat );
     $(".modal-body #no_telepon").val( telepon );
     $(".modal-body #nama").val( nama );
});
            </script>      
         <script type="text/javascript">

            $(document).on('click', '.pilih_survey', function (e) {
                document.getElementById("id_pegawai").value = $(this).attr('id-pegawai');
                document.getElementById("nama").value = $(this).attr('nama');
                document.getElementById("alamat").value = $(this).attr('alamat');
                document.getElementById("no_telepon").value = $(this).attr('no-telepon');
                $('#modal_surveyor').modal('hide');
            });

            $(document).ready(function() {
   $('#surveyor').DataTable();
} );
        </script>     
        <script type="text/javascript">
function detailKLS(str) {
    if (str == "") {
        document.getElementById("data_detail_kls").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_detail_kls").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","system/survey/detail_kls.php?no="+str,true);
        xmlhttp.send();
    }
}
</script>
<script type="text/javascript">

            $(document).on('click', '.kls_survey', function (e) {
                document.getElementById("kls").value = $(this).attr('kls');
                document.getElementById("nik").value = $(this).attr('nik');
                document.getElementById("nama").value = $(this).attr('nama');
                document.getElementById("alamat").value = $(this).attr('alamat');
                document.getElementById("no_telepon").value = $(this).attr('no-telepon');
                $('#modal_cari_kls').modal('hide');
            });

            $(document).ready(function() {
   $('#modaldaftar').DataTable();
} );
        </script>
<script type="text/javascript">
  
  $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"<td><input name='nama_keluarga[]' type='text'  placeholder='Name' class='span10'/>"+
      "</td>"+
      "<td><input type='date' name='tgl_lahir_keluarga[]' placeholder='tanggal lahir' class='span8'/>"+
      "</td>"+
      "<td><select name='hubungan[]'' class='span8'>"+
                        "<option value='adik'>adik</option>"+
                        "<option value='kaka'>kaka</option>"+
                        "<option value='ayah'>ayah</option>"+
                        "<option value='ibu'>ibu</option>"+
                        "<option value='sepupu'>sepupu</option>"+
                        "<option value='paman'>paman</option>"+
                        "<option value='bibi'>bibi</option>"+
                        "<option value='kakek'>kakek</option>"+
                        "<option value='nenek'>nenek</option>"+
                      "</select>"+
      "</td>"+
    "<td>"+
    "<select name='status_martial[]' class='span8'>"+
                        "<option value='Lajang'>Lajang</option>"+
                        "<option value='Menikah'>Menikah</option>"+
                        "<option value='Duda'>Duda</option>"+
                        "<option value='Janda'>Janda</option>"+
                    "</select>"+
                    "</td>"+
    "<td><input name='pekerjaan_utama[]' type='text' class='span8'  placeholder='pekerjaan utama' class='span10'/>"+
      "</td>"+
    "<td><input name='pekerjaan_sampingan[]' type='text' class=span10'  placeholder='pekerjaan sampingan'/>"+
      "</td>"+
    "<td>"+
    "<select name='pendidikan[]' class='span8'>"+
                        "<option value='Tidak Sekolah'>Tidak Sekolah</option>"+
                        "<option value='SD'>SD</option>"+
                        "<option value='SMP'>SMP</option>"+
                        "<option value='SMA'>SMA</option>"+
                        "<option value='S1'>S1</option>"+
                        "<option value='S2'>S2</option>"+
                        "<option value='S3'>S3</option>"+
                    "</select></td>"+
    "<td><input name='keterangan_keluarga[]' type='text' class='span8' placeholder='keterangan'/>"+
      "</td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
       if(i>1){
     $("#addr"+(i-1)).html('');
     i--;
     }
   });

});
</script>

 <script type="text/javascript">
$(function() {
  enable_cb_elektronik();
  $("#tdk_elektronik").click(enable_cb_elektronik);
});

function enable_cb_elektronik() {
  if (this.checked) {
     $("input.cb_elektronik").attr("disabled", true);
   
  } else {
    $("input.cb_elektronik").removeAttr("disabled");
  }
}

$(function() {
  enable_cb_kendaraan();
  $("#tdk_kendaraan").click(enable_cb_kendaraan);
});

function enable_cb_kendaraan() {
  if (this.checked) {
     $("input.cb_kendaraan").attr("disabled", true);
   
  } else {
    $("input.cb_kendaraan").removeAttr("disabled");
  }
}

$(function() {
  enable_cb_ternak();
  $("#tdk_ternak").click(enable_cb_ternak);
});

function enable_cb_ternak() {
  if (this.checked) {
     $("input.cb_ternak").attr("disabled", true);
     $("input.txtjumlah_ternak").attr("disabled", true);
   
  } else {
    $("input.cb_ternak").removeAttr("disabled");
  }
}
$(function() {
  enable_cb_simpanan();
  $("#tdk_simpanan").click(enable_cb_simpanan);
});

function enable_cb_simpanan() {
  if (this.checked) {
     $("input.txt_ternak").attr("disabled",true);
   
  } else {
    $("input.txt_ternak").removeAttr("disabled");
  }
}


</script>
<script type="text/javascript">

 function cek_ternak(ternak,no) {

        if(ternak.checked){
          document.getElementById('jumlah_ternak'+no).disabled = false;          
        }else{
          document.getElementById('jumlah_ternak'+no).disabled = true;
          document.getElementById('jumlah_ternak'+no).value = null;
        }

      }

</script>
 <script type="text/javascript">

            $(document).on('click', '.pilih_regulasi', function (e) {
                document.getElementById("id_regulasi").value = $(this).attr('id-regulasi');
                document.getElementById("tahun").value = $(this).attr('tahun');
                document.getElementById("semester").value = $(this).attr('semester');
                $('#modal_regulasi').modal('hide');
           var str=$(this).attr('id-regulasi');
if (str == "") {
        document.getElementById("data_lulus_seleksi").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_lulus_seleksi").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","system/survey/detail_lulus_seleksi.php?no="+str,true);
        xmlhttp.send();
    }
            });

            $(document).ready(function() {
   $('#regulasi').DataTable();
} );
        </script> 

 <script type="text/javascript">

            $(document).on('click','.pilih_regulasi_1', function (e) {
                document.getElementById("id_regulasi_1").value = $(this).attr('id-regulasi1');
                $('#modal_regulasi_1').modal('hide');
     });
                $(document).ready(function() {
   $('#regulasi1').DataTable();
} );
                </script>
                <script>
                 $(document).ready(function() {
   $('#t_lulus_seleksi').DataTable();
} );
                </script>
</body>
</html>
