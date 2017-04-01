<<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin Inkubator Mandiri</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
        <link rel="stylesheet" href="asset/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="asset/css/matrix-login.css" />
        <link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
<body style="background-image: url('asset/img/home.jpg')">
<div id="loginbox">            
            <form id="loginform" class="form-vertical" method="POST" action="">
                 <div class="control-group normal_text"> <h3><img src="asset/img/im.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" placeholder="Username" name="username">
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" placeholder="Password" name="password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" name="login" class="btn btn-success" value="login"></span>
                </div>
            </form>
           </div>
        
        <script src="asset/js/jquery.min.js"></script>  
        <script src="asset/js/matrix.login.js"></script> 
    </body>

</html>
<?php

    include('../config/connect.php');
    if(isset($_POST['login'])){
        $user = $_POST['username'];
        $pass = MD5($_POST['password']);
        if($user==null && $password==null){
                                echo"   <script language='javascript'>
                                alert('isi username dan password');
                            </script>   ";
                            }
                            else{
        $execute = mysql_query("SELECT * FROM user WHERE USERNAME = '".$user."' AND PASSWORD='".$pass."'");
        $fetch = mysql_fetch_array($execute);
        $num = mysql_num_rows($execute);
            if($num=='1'){
                session_start();
                $_SESSION['id'] = $fetch['ID'];
                $_SESSION['username'] = $fetch['USERNAME'];
                $_SESSION['password'] = $_POST['PASSWORD'];
                $_SESSION['level'] = $fetch['LEVEL'];
                $_SESSION['log'] = 1;
                $_SESSION['id_pegawai']=$fetch['ID_PEGAWAI'];
                header("location:index.php");
            }else{
                if($user != $fetch['username']){
                    echo"   <script language='javascript'>
                                alert('Username anda salah, mohon periksa kembali !');
                            </script>   
                            ";
                }else if($pass != $fetch['password']){
                    echo"   <script language='javascript'>
                                alert('Password anda salah, mohon periksa kembali !');
                            </script>   
                            ";}
            }
    }
}
?>