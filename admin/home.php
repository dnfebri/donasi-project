<?php 
session_start();
error_reporting(0);
if (!$_SESSION['username']) {
// jika session user tidak ada maka akan dialihkan ke form login atau file index.php
     header('location:index.php');
}else{
// jika session user ada
  if (isset($_GET['keluar'])) {
  // jika variable $_GET['keluar'] ada maka akan logout dan di alihkan ke halaman login lagi
    session_destroy();
    // hancurkan atau hapus session user
    header('location:index.php');
  }
?>
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

<!--banner start here-->
<div class="banner">
  <div class="container">
    <div class="banner-main">
      <h1>Selamat Datang Administrator</h1><br>
     <div class="bwn">
      <a href="daftardonasi.php"> Daftar Pendonasi </a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="penyaluran.php"> Penyaluran </a>
    </div><br>
     <div class="bwn">
      <a href="pesan.php"> Pesan Masuk </a>&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="gantipass.php"> Ganti Password </a>
    </div>
    </div>
  </div>
</div>
<!--banner end here-->

</body>
</html>
<?php } ?>