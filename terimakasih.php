<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>UMSIDA Peduli | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='css/gfont.css' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
				<a href="index.html"> <img src="images/logo.png" alt=""/> </a>
			</div>
			<span class="menu"> <img src="images/icon.png" alt=""/></span>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li><a href="index.html">HOME</a></li>
					<li><a href="about.html">OUR TEAM</a></li>
					<li><a href="gallery.html">GALLERY</a></li>
					<li><a href="donasiterkumpul.php">DONASI TERKUMPUL</a></li>
					<li><a href="konfirmasi.html">KONFIRMASI</a></li>
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
<!--heder end here-->
<!---about charity start here-->
<div class="about">
     <div class="container">
	     <div class="get-main">
	  	     <div class="about-top" align="center">
						 <h3>Terimakasih Atas Donasi Anda</h3>
						 <?php
						 error_reporting(0);
						 	if($_SESSION['nama']  != null){
									echo "Kepada Bapak/Ibu ";
						 			echo ucwords ($_SESSION['nama']);
									echo ", total donasi Anda sebesar Rp. ";
									echo $_SESSION['tdonasi']."<br>"."<br>";
									echo "Silahkan melakukan tranfer ke"."<br>"."Rekening Mandiri Syariah : 123-45-6789"."<br>"."Atas Nama UMSIDA PEDULI"."<br>";
						 	    /** setelah data di tampikan maka session di hapus **/

						 	}else{
						 		echo " ";
						 	}


						 ?>
	  	     </div>
	  	    <div class="about-grid">
			<div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--about us end here-->

</body>
</html>
