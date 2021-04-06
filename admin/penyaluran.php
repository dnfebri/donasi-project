<?php
session_start();
include_once '../include/koneksi.php';
if (!$_SESSION['username']) {
  // jika session user tidak ada maka akan dialihkan ke form login atau file index.php
  header('location:index.php');
} else {
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
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--web-fonts-->
    <link href='../css/gfont.css' rel='stylesheet' type='text/css'>
    <!--js-->
    <script src="../js/jquery.min.js"></script>
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
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
          event.preventDefault();
          $('html,body').animate({
            scrollTop: $(this.hash).offset().top
          }, 1000);
        });
      });

      function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
        return true;
      }
    </script>
    <!-- //end-smoth-scrolling -->
  </head>

  <body>
    <!--header start here-->
    <div class="mothergrid">
      <div class="container">
        <div class="header">
          <div class="logo">
            <a href="../index.html"> <img src="../images/logo.png" alt="" /> </a>
          </div>
          <span class="menu"> <img src="../images/icon.png" alt="" /></span>
          <div class="clear"> </div>
          <div class="navg">
            <ul class="res">
              <!-- <li><a class="active" href="home.php">Administrator</a></li> -->
              <li><a href="?keluar">Log Out</a></li>
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
    <div class="container">
      <a class="btn btn-danger" href="home.php"><span class="glyphicon glyphicon-log-in"></span> Back Home</a>  
    </div>
    <br><br>

    <div class="news">
      <div class="container">
        <div class="get-main">
          <div class="about-top">

          <h2 class="text-center">Total Donasi Saat Ini</h2>
          <h3>Rp. <span class='count'><?= donasiTerkumpul(); ?></span></h3>
          

            <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
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
                    <th class="text-center col-sm-1"> Pelaksana </th>
                    <th class="text-center col-sm-1"> Total </th>

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
        <td align=right>" . $data['telepon'] . "</td>
        <td align=right>" . $data['udonasi'] . "</td>
        <td align=right>" . $data['upelaksana'] . "</td>
        <td align=right>" . $data['tdonasi'] . "</td>
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
              <h2>Kas Keluar :</h2><br>

              <form class="form" action="aksipenyaluran.php" method="POST" enctype="multipart/form-data" class="form-horizontal form-pricing" role="form" id="formdonasi" name="formdonasi">
                <div class="col-sm-3">
                  <div class="form-group">
                    <input class="form-control" id="inputdefault" name="tkeluar" type="number" onkeypress="return isNumberKey(event)" placeholder="Kas Keluar" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-7">
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                  </div>
                </div>
                <div class="col-sm-2">
                  <button type="submit" class="btn btn-default">Input</button>
                </div>
                <script>
                  function CheckValidation() {
                    var isValidForm = document.forms['formdonasi'].checkValidity();
                    if (isValidForm) {
                      document.forms['formdonasi'].submit();
                    } else {
                      alert("Semua data harap diisi");
                      return false;
                    }
                  }
                </script>
              </form>


              <br>
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th class="text-center col-sm-1"> Nomor </th>
                    <th class="text-center  col-sm-3">Jumlah Keluar</th>
                    <th class="text-center col-sm-8"> Keterangan </th>

                  </tr>
                </thead>

                <?php
                $ik = 0;
                $tampil = "SELECT * FROM dns_keluar ORDER BY id_don";
                $sql = mysqli_query($conn, $tampil);
                while ($data = mysqli_fetch_array($sql)) {
                  ++$ik;
                  echo "    
                      <tr>
                      <td align=center>" . $ik . "</td>
                      <td align=right>" . $data['tkeluar'] . "</td>
                      <td align=left>" . $data['keterangan'] . "</td>
                      <td><center><div class='btn btn-sm btn-default'><a href='delete.php?id=" . $data['id_don'] . "'style='text-decoration: none'> Cancel </a></div></center></td>
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
  </body>
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

  </html>
<?php } ?>