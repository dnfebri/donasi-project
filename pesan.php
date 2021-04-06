<?php 
session_start();
include_once '../include/koneksi.php';
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
          <li><a class="active" href="home.html">Administrator</a></li>
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
<br><br>
<div class="news">
      <div class="container">
        <div class="news-main">
        <div class="about-top">
          <h3>Daftar Donasi</h3>
<br>
<br>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table class="table table-hover table-bordered">
<thead>
<tr>
    <th class="text-center"> Nomor </th>
    <th> Nama </th>
    <th class="text-center"> Telepon </th>
    <th class="text-center"> Transfer </th>
    <th class="text-center"> Bukti Transfer </th>
    <th class="text-center"> Pesan </th>
    
</tr>
</thead>

<?php  
$i=0; //inisialisasi untuk penomoran data
//perintah untuk menampilkan data, id_brg terbesar ke kecil
$tampil = "SELECT * FROM dns_pesan ORDER BY id_pesan DESC";
//perintah menampilkan data dikerjakan
$sql = mysqli_query($conn, $tampil);
 
//tampilkan seluruh data yang ada pada tabel user
while($data = mysqli_fetch_array($sql))
 {
   $i++;
    if($data['sukses'] == '0')
         {
 echo "    
        <tr>
        <td align=center>".$data['id_pesan']."</td>
        <td>".$data['nama']."</td>
        <td align=right>".$data['telepon']."</td>
        <td align=right>".$data['transfer']."</td>
        <td><img src='upload/".$data['foto']."' width='100px' height='100px'/></td>
        <td align=right>".$data['pesan']."</td>
        <td align=center>Belum Terkonfirmasi</td>
        </tr> 
        ";
     }
     else
 echo "    
        <tr>
        <td align=center>".$data['id_donasi']."</td>
        <td>".$data['nama']."</td>
        <td align=right>".$data['telepon']."</td>
        <td align=right>".$data['udonasi']."</td>
        <td align=right>".$data['upelaksana']."</td>
        <td align=right>".$data['tdonasi']."</td>
        <td align=center>Terkonfirmasi</td>
        <td><center><div class='btn btn-sm btn-default'><a href='batal.php?id=".$data['id_donasi']."'style='text-decoration: none'>Batal </a></div></center></td>
        </tr> 
        ";
        
}

?>
</table>
</div>
</div>
</div>
</div>
</body>
</html>
<?php } ?>