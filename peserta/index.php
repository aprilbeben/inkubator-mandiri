<?php
include('../config/connect.php');
include('../config/fungsi_tanggal.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inkubator Mandiri</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="asset/datepicker/css/datepicker3.css"/>

    <!-- Theme CSS -->
    <link href="asset/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
     <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
       <?php include("layout/navbar.php") ;?>
 </div>
        </div>
</nav>
<!--header-->




<?php include("layout/header.php") ;?>
<!--content-->
<?php include("page/portofolio.blade.php") ;?>
 <section class="success" id="about">
<?php include("page/about.blade.php") ;?>
 </section>

<?php include("page/daftar.blade.php") ;?>
<!--footer-->
   <?php include("layout/footer.php") ;?>
   <!--modal-->

<?php include("page/modal_kwu.blade.php") ;?>
<?php include("page/modal_cukur.blade.php") ;?>
<?php include("page/modal_sablon.blade.php") ;?>
<?php include("page/modal_salon.blade.php") ;?>
<?php include("page/modal_dkv.blade.php") ;?>
<?php include("page/modal_jahit.blade.php") ;?>
<?php include("page/formulir_regis.blade.php") ;?>

    <!-- jQuery -->
    <script src="asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="asset/js/jqBootstrapValidation.js"></script>
    <script src="asset/js/contact_me.js"></script>
    <script src="asset/js/daftar.js"></script>

    <!-- Theme JavaScript -->
    <script src="asset/js/freelancer.min.js"></script>


     <script src="asset/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tanggal').datepicker({
                    format: "yyyy-m-d",
                    autoclose:true
                });
            });
        </script>

</body>

</html>
