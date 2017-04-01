<link href="asset/fullcalender/lib/cupertino/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="asset/fullcalender/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="asset/fullcalender/fullcalendar.print.css" rel="stylesheet" type="text/css" media="print" />
<script src="asset/fullcalender/lib/moment.min.js" type="text/javascript"></script>
<script src="asset/fullcalender/lib/jquery.min.js" type="text/javascript"></script>
<script src="asset/fullcalender/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
<script src="asset/fullcalender/fullcalendar.min.js" type="text/javascript"></script>
<?php
function tanggal_sekarang($time=FALSE)
{
  date_default_timezone_set('Asia/Jakarta');
  $str_format='';
  if($time==FALSE)
  {
    $str_format= date("Y-m-d");
  }else{
    $str_format= date("Y-m-d H:i:s");
  }
  return $str_format;
}
?>
<script>

  $(document).ready(function() {
  
    $('#calendar').fullCalendar({
      theme:true,
      header: {
        left: 'prev,next ,today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '<?php tanggal_sekarang();?>',
      editable: true,
      eventLimit: true,
      events: {
        url: 'page/data_agenda.php',        
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });
    
  });

</script>  
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php?page=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div  class="quick-actions_homepage">
    <ul class="quick-actions">
      <li class="bg_lb"> <a href="#"> <i class="icon-dashboard"></i> Beranda </a> </li>
      <li class="bg_lg"> <a href="index.php?page=list_survey"> <i class="icon-user"></i> List Survey</a> </li>
      <li class="bg_ly"> <a href="index.php?page=tambah_data_survey"> <i class="icon-file"></i> Tambah Survey </a> </li>
    </ul>
  </div>
   <div class="container-fluid">
    <div class="row-fluid">
              
      <div class="span12">
        <div class="widget-box widget-calendar">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Selamat Datang Di Halaman ADMIN</h5>
          </div>
     <div class="widget-content">
     <center>
     <h1 class="bg_lb">MANAJER</h1>
              <h3 class="bg_lg">SELAMAT BEKERJA</h3>
            <h4>agenda penerimaan calon peserta pelatihan</h4>
            </center>
            <div class="panel-left">
              <style>
  #calendar {
    max-width: 600px;
    margin: 0 auto;
  }
</style>
<div id='loading'>loading...</div>
<div id='calendar'></div>
            </div>
            </div>
            </div>
            </div>
  </div>
</div>
<?php

?>