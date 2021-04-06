<?php
session_start();
error_reporting(0);
include_once '../include/koneksi.php';

$username    = $_POST['username'];
$password    = $_POST['password'];

$cekuser = mysqli_query($conn, "SELECT * FROM dns_admin WHERE username = '$username'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
if ( $jumlah == 0 ) {
   		$data['success'] = false;
} else {
    if ( $password <> $hasil['password'] ) {
        $data['success'] = false;
    } else {
    	$_SESSION['username'] = $hasil['username'];
        $data['success'] = true;
    }
}
echo json_encode($data);
?>
