<?php 
session_start();
include_once '../include/koneksi.php';
if (!$_SESSION['username']) {
// jika session user tidak ada maka akan dialihkan ke form login atau file index.php
     header('location:index.php');
}else{
    $tkeluar        = $_POST['tkeluar'];
    $keterangan     = $_POST['keterangan'];

    $input    ="INSERT INTO dns_keluar (tkeluar, keterangan)
            VALUES ('$tkeluar','$keterangan')";
    $query_input = mysqli_query($conn, $input);
        if ($query_input) {
    ?>
        <script language="JavaScript">
            document.location='penyaluran.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Semua data harap diisi";
    }
    //Tutup koneksi engine MySQL
    mysqli_close($conn);
  }
?>