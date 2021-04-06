<!DOCTYPE html>
<html>
<head>
<title>UMSIDA Peduli | Home</title>
<link rel="stylesheet" href="css/jquery-ui.css">
<link href="css/donasi.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='css/gfont.css' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
    </script>
<script src="js/jquery-ui.min.js"></script>
<script>
      $(document).ready(function() {
          $("#slider").slider({
              range: "min",
              animate: true,
              value:1,
              min: 0,
              max: 1000000,
              step: 1000,
              slide: function(event, ui) {
                update(1,ui.value); //changed
              }
          });
          $("#slider2").slider({
              range: "min",
              animate: true,
              value:1,
              min: 0,
              max: 1000000,
              step: 1000,
              slide: function(event, ui) {
                update(2,ui.value); //changed
              }
          });
          //Added, set initial value.
          $("#amount").val(0);
          $("#amount2").val(0);
          $("#amount-label").text(0);
          $("#amount2-label").text(0);
          update();
      });
      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();
        var $amount2 = slider == 2?val:$("#amount2").val();
        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $amount2 = $( "#slider2" ).slider( "value" );
         */
         $total = (parseInt($amount) + parseInt($amount2));
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);
         $( "#amount2" ).val($amount2);
         $( "#amount2-label" ).text($amount2);
         $( "#total" ).val($total);
         $( "#total-label" ).text($total);
         $('#slider a').html('<label>'+$amount+'</label>');
         $('#slider2 a').html('<label>'+$amount2+'</label>');
      }
      function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode >57))
        return false;
        return true;
}</script>
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
				<a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>
			<span class="menu"><img src="images/icon.png" alt=""/></span>
			<div class="clear"></div>
			<div class="navg">
				<ul class="res">
					<li>
						<a href="index.html">HOME</a>
					</li>
					<li>
						<a href="about.html">OUR TEAM</a>
					</li>
					<li>
						<a href="gallery.html">GALLERY</a>
					</li>
					<li>
						<a href="donasiterkumpul.html">DONASI TERKUMPUL</a>
					</li>
					<li>
						<a href="konfirmasi.html">KONFIRMASI</a>
					</li>
				</ul>
				    <script>
						$( "span.menu").click(function() {
							$(  "ul.res" ).slideToggle("slow", function() {
						// Animation complete.
							});
						});
           			</script>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--heder end here-->
<div class="container">
	<div class="price-box">
		<form action="action_input.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-pricing" role="form" id="formdonasi" name="formdonasi">
			<h4 class="great">Nama Lengkap :</h4>
			<div class="col-sm-12">
				<input class="form-control" id="inputdefault" name="nama" style="text-transform: capitalize;" type="text" placeholder="Nama Lengkap" required><br>
				<br></div>
			<br>
			<br>
			<h4 class="great">No Telepon :</h4>
			<div class="col-sm-12">
				<input class="form-control" id="inputdefault" name="telepon" type="number" onkeypress="return isNumberKey(event)" placeholder="Telepon" required><br>
				<br></div>
			<div class="price-slider">
				<h4 class="great">Donasi</h4>
				<span>Berapapun itu akan sangat berarti bagi kami</span>
				<div class="col-sm-12">
					<div id="slider"></div>
				</div>
			</div>
			<div class="price-slider">
				<h4 class="great">Pelaksana</h4>
				<span>Berapapun itu akan sangat berarti bagi kelangsungan program ini</span>
				<div class="col-sm-12">
					<div id="slider2"></div>
				</div>
			</div>
			<div class="price-form">
				<div class="form-group">
					<label for="amount" class="col-sm-6 control-label">Untuk Donasi :</label>
					<div class="col-sm-6">
						<input type="hidden" id="amount" name="udonasi" class="form-control">Rp.
						<p class="price lead" id="amount-label"></p>
						<span class="price"></span>
					</div>
				</div>
				<div class="form-group">
					<label for="amount2" class="col-sm-6 control-label">Untuk Pelaksana :</label>
					<div class="col-sm-6">
						<input type="hidden" id="amount2" name="upelaksana" class="form-control">Rp.
						<p class="price lead" id="amount2-label"></p>
						<span class="price"></span>
					</div>
				</div>
				<hr class="style">
				<div class="form-group total">
					<label for="total" class="col-sm-6 control-label"><strong>Total :</strong></label>
					<div class="col-sm-6">
						<input type="hidden" id="total" name="tdonasi" class="form-control">Rp.
						<p class="price lead" id="total-label"></p>
						<span class="price"></span>
					</div>
				</div>
			</div>
			<div class="donasi" align="center" onclick="CheckValidation();" class="button" href="javascript:;">
				<div class="dnt">
			<a> Donasi Sekarang </a>
		</div>
			<script>
				function CheckValidation()
				{
					var isValidForm = document.forms['formdonasi'].checkValidity();
					if (isValidForm)
					{
						document.forms['formdonasi'].submit();
					}
					else
					{
						alert("Semua data harap diisi");
						return false;
					}
				}
            </script>
			</div>
		</div>
	</form>
</div>
</div>

<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="footer-navg">
				<ul class="res">
					<li><a href="index.html">HOME</a></li>
					<li><a href="about.html">OUR TEAM</a></li>
					<li><a href="gallery.html">GALLERY</a></li>
					<li><a href="donasiterkumpul.php">DONASI TERKUMPUL</a></li>
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
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
</div>
<!--/footer end here-->

</body>
</html>