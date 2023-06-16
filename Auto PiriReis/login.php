<?php
 session_start();
 define('DB_SERVER','localhost');
 define('DB_USER','root');
 define('DB_PASS' ,'Cd123456');
 define('DB_NAME', 'autodas_autodas');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>





<?php

if(isset($_POST['login']))
{
$password=$_POST['pass'];
$dec_password=$password;
$useremail=$_POST['kname'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE uemail='$useremail' and passwordd='$dec_password' ");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$extra="index.php";
$_SESSION['uemail']=$num['uemail'];
$_SESSION['unvan']=$num['unvan'];
$_SESSION['kname']=$num['kname'];
$_SESSION['id']=$num['id'];
$_SESSION['giriskontrol']=1;

    
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{











    if(isset($_POST['login']))
    {
    $password=$_POST['pass'];
    $dec_password=$password;
    $useremail=$_POST['kname'];
    $ret= mysqli_query($con,"SELECT * FROM firmalar WHERE a2='$useremail' and a6='$dec_password' ");
    $num=mysqli_fetch_array($ret);
    if($num>0)
    {
    
    $extra="customer/";
    $_SESSION['uemail']=$num['a2'];
    $_SESSION['kname']=$num['a1'];
    $_SESSION['tel']=$num['a3'];
    $_SESSION['sehir']=$num['a4'];
    $_SESSION['id']=$num['id'];
    $_SESSION['giriskontrol']=2;
    
    
        
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    header("location:http://$host$uri/$extra");
    exit();
    }
    else
    {


        if(isset($_POST['login']))
        {
        $password=$_POST['pass'];
        $dec_password=$password;
        $useremail=$_POST['kname'];
        $ret= mysqli_query($con,"SELECT * FROM calisan WHERE a2='$useremail' and a5='$dec_password' ");
        $num=mysqli_fetch_array($ret);
        if($num>0)
        {
        
        $extra="worker/";
        $_SESSION['uemail']=$num['a2'];
        $_SESSION['unvan']=$num['a4'];
        $_SESSION['kname']=$num['a1'];
        $_SESSION['id']=$num['id'];
        $_SESSION['giriskontrol']=3;
        
        
            
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
        }
        else
        {
        echo "<script>alert('Hatalı şifre veya mail');</script>";
        $extra="login.php";
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
        }
        
        
        
        }
    
    }
    
    
    
    }

























}



}


//

?>


<!DOCTYPE html>
<html class="loading" lang="tr" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Auto Das</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="app-assets/images/pages/login.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Auto Piri Reis Giriş</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Hoşgeldin lütfen hesap bilgilerini gir.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form   name="login"  method="post"  >
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" name="kname" class="form-control" id="user-name" placeholder="Email & Kullanıcı Adı" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Email</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" name="pass" class="form-control" id="user-password" placeholder="Şifre" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Şifre</label>
                                                    </fieldset>
                                             
                                                    <button type="submit"  name="login"  class="btn btn-primary float-right btn-inline">Giriş Yap</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">

                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>