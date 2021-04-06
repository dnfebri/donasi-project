<!DOCTYPE html>
<html>
<head>
<title>UMSIDA Peduli | Administrator</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='../css/gfont.css' rel='stylesheet' type='text/css'>
<!--js-->
<script src="../js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });


  </script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="mothergrid">
  <div class="container">
    <div class="header">
      <div class="logo">
        <a href="../index.html"> <img src="../images/logo.png" alt=""/> </a>
      </div>
      <span class="menu"> <img src="../images/icon.png" alt=""/></span>
      <div class="clear"> </div>
      <div class="navg">
        <ul class="res">
          <li><a class="active" href="home.php">Administrator</a></li>
          <li><a href="?keluar">Log Out</a></li>          
        </ul>
          <script>
            $( "span.menu").click(function() {
              $(  "ul.res" ).slideToggle("slow", function() {
                // Animation complete.
              });
            });
          </script>
      </div>
    <div class="clearfix"> </div>
    </div>
  </div>
</div>

<?php
session_start();
error_reporting(0);
include "../include/koneksi.php";
if (!$_SESSION['username']) {
    // jika session user tidak ada maka akan dialihkan ke form login atau file index.php
    header('location:index.php');
} else {
    if (isset($_POST['re_password'])) {
        $old_pass = $_POST['old_pass'];
        $new_pass = $_POST['new_pass'];
        $re_pass  = $_POST['re_pass'];
        $chg_pwd  = mysqli_query($conn, "SELECT * FROM dns_admin WHERE id='1'");
        $chg_pwd1 = mysqli_fetch_array($chg_pwd);
        $data_pwd = $chg_pwd1['password'];
        if ($data_pwd == $old_pass) {
            if ($new_pass == $re_pass) {
                $update_pwd = mysqli_query($conn, "UPDATE dns_admin SET password='$new_pass' WHERE id='1'");
                echo "<script>alert('Update Sukses'); window.location='home.php'</script>";
            } else {
                echo "<script>alert('Password Baru Tidak Cocok'); window.location='gantipass.php'</script>";
            }
        } else {
            echo "<script>alert('Password Lama Salah'); window.location='gantipass.php'</script>";
        }
    }
}
?>

<!--banner start here-->
<div class="banner">
  <div class="container">
    <div class="banner-main">
            <form method="post" enctype="multipart/form-data">
                 <p>Password Lama</p>
                 <input type="text" name="old_pass" placeholder="Password Lama" value="" required/>
                 <p>Password Baru</p>
                 <input type="text" name="new_pass" placeholder="Password Lama" value="" required/>
                 <p>Konfirmasi Password Baru</p>
                 <input type="text" name="re_pass" placeholder="Password Lama" value="" required/>
                 <input type="submit" name="re_password" value="Ganti Password">
            </form>
    </div>
  </div>
</div>
<!--banner end here-->


    </body>
    </html>