<?php
session_start();
include_once 'include/koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>UMSIDA Peduli | Home</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--web-fonts-->
	<link href='css/gfont.css' rel='stylesheet' type='text/css'>
	<!--js-->
	<script src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		} >
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
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
					<a href="index.html"> <img src="images/logo.png" alt="" /> </a>
				</div>
				<span class="menu"> <img src="images/icon.png" alt="" /></span>
				<div class="clear"> </div>
				<div class="navg">
					<ul class="res">
						<li><a href="index.html">HOME</a></li>
						<li><a href="about.html">OUR TEAM</a></li>
						<li><a href="gallery.html">GALLERY</a></li>
						<li><a class="active" href="donasiterkumpul.php">DONASI TERKUMPUL</a></li>
						<li><a href="konfirmasi.html">KONFIRMASI</a></li>
					</ul>
					<script>
						$("span.menu").click(function() {
							$("ul.res").slideToggle("slow", function() {
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
	<!--contact start here-->
	<div class="news">
		<div class="container">
			<div class="get-main">
				<div class="about-top">
					<h2 class="text-center">Total Donasi Saat Ini</h2>
					<h3>Rp. <span class='count'><?= donasiTerkumpul(); ?></span></h3>

					<!-- ///////////////////////////// Tabel ///////////////////////////////// -->
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h2>Rincian :</h2>
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th class="text-center col-sm-1"> Nomor </th>
									<th class="col-sm-3"> Nama </th>
									<th class="text-center col-sm-1"> Telepon </th>
									<th class="text-center col-sm-1"> Donasi </th>

								</tr>
							</thead>

							<?php
							$i = 0; //inisialisasi untuk penomoran data
							//perintah untuk menampilkan data, id_brg terbesar ke kecil
							$tampil = "SELECT * FROM dns_donasi ORDER BY id_donasi DESC";
							//perintah menampilkan data dikerjakan
							$sql = mysqli_query($conn, $tampil);

							//tampilkan seluruh data yang ada pada tabel user
							while ($data = mysqli_fetch_array($sql)) {
								$i++;
								if ($data['sukses'] == '1') {
									echo "    
        <tr>
        <td align=center>" . $data['id_donasi'] . "</td>
        <td>" . $data['nama'] . "</td>
        <td align=center>0xxxxxxxxx</td>
        <td align=center>" . $data['tdonasi'] . "</td>
        </tr> 
        ";
								} else
									echo " ";
							}

							?>
						</table>
					</div>
					<div class="col-md-2"></div><br>

					<br><br><br><br><br><br><br><br><br><br>
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h2>Kas Keluar :</h2>
						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<th class="text-center col-sm-1"> Nomor </th>
									<th class="col-sm-2"> Jumlah Keluar </th>
									<th class="text-center col-sm-7"> Keterangan </th>

								</tr>
							</thead>

							<?php
							$tampil = "SELECT * FROM dns_keluar ORDER BY id_don";
							$sql = mysqli_query($conn, $tampil);
							$ik = 0;
							while ($data = mysqli_fetch_array($sql)) {
								++$ik;
								echo "    
									<tr>
									<td align=center>" . $ik . "</td>
									<td align=right>" . $data['tkeluar'] . "</td>
									<td align=left>" . $data['keterangan'] . "</td>
									</tr> 
									";
							}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--contact end here-->
	<!--footer start here-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="footer-navg">
					<ul class="res">
						<li><a href="index.html">HOME</a></li>
						<li><a href="about.html">OUR TEAM</a></li>
						<li><a href="gallery.html">GALLERY</a></li>
						<li><a class="active" href="donasiterkumpul.html">DONASI TERKUMPUL</a></li>
						<li><a href="konfirmasi.html">KONFIRMASI</a></li>
					</ul>
				</div>
				<div class="footer-top">
					<div class="col-md-6 footer-left">
						<h3>FOLLOW US</h3>
						<ul>
							<li><a href="#"><span class="a"> </span></a></li>
							<li><a href="#"><span class="b"> </span></a></li>
						</ul>
					</div>
					<div class="col-md-6 footer-right">
						<h3>Kontak Kami</h3>
						<p>Jl. Majapahit No.666 B</p>
						<p>Sidoarjo</p>
						<p>Phone : +62 31 8945444</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="footer-bottom">
					<p> &copy 2016 UMSIDA Peduli</p>
				</div>
				<div class="clearfix"> </div>
				<script type="text/javascript">
					$(document).ready(function() {
						$().UItoTop({
							easingType: 'easeOutQuart'
						});

					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
	</div>
	<!--/footer end here-->
	<script type="text/javascript">
		$('.count').each(function() {
			$(this).prop('Counter', 0).animate({
				Counter: $(this).text()
			}, {
				duration: 4000,
				easing: 'swing',
				step: function(now) {
					$(this).text(Math.ceil(now));
				}
			});
		});
	</script>
</body>

</html>