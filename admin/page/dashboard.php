<?php 
    if(@$_SESSION['level'] == 1){
        include('page/dashboard_m.php');
    }else if(@$_SESSION['level'] == 2){
        include('page/dashboard_h.php');
    }else if(@$_SESSION['level'] == 3){
        include('page/dashboard_s.php');
    }
?>