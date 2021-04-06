<?php 
session_start();
error_reporting(0);
include "../include/koneksi.php";
if (!$_SESSION['username']) {
// jika session user tidak ada maka akan dialihkan ke form login atau file index.php
     header('location:index.php');
}else{
$id=$_GET['id'];
 
//query untuk menghapus data
$query="DELETE FROM dns_keluar WHERE id_don='$id'";
$exe=mysqli_query($conn, $query);
 
//laporan untuk data yang dihapus
//berhasil atau tidak data dihapus
if ($exe){
    echo "<script>location.replace('penyaluran.php')</script>";
}else{
    echo "<script>alert('Gagal')
    location.replace('penyaluran.php')</script>";
}
}
?>