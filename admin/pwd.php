<?php 
session_start();
error_reporting(0);
include "../include/koneksi.php";
if (!$_SESSION['username']) {
// jika session user tidak ada maka akan dialihkan ke form login atau file index.php
     header('location:index.php');
}else{
$password1 = mysqli_real_escape_string($dbcon, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($dbcon, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($dbcon, $_SESSION['username']);

if ($password1 <> $password2)
{
    echo "your passwords do not match";
}
else if (mysqli_query($dbcon, "UPDATE dns_admin SET password='$password1' WHERE username='$username'"))
{
    echo "You have successfully changed your password.";
}
else
{
    mysqli_error($dbcon);
}
}
mysqli_close($dbcon);

?>