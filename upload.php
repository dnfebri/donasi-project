<?php
include_once 'include/koneksi.php';
//This is the directory where images will be saved
    $target = "upload/";
    $target = $target . basename( $_FILES['foto']['name']);

    $nama           = $_POST['nama'];
    $telepon        = $_POST['telepon'];
    $transfer       = $_POST['transfer'];
    $pesan          = $_POST['pesan'];
    // $tnpName        = $_FILES['foto']['tmp_name'];


//This gets all the other information from the form
$foto         =   basename( $_FILES['foto']['name']);
$valid_ext    =   array('jpg','jpeg','png','gif','bmp');

if(isset($_POST['upload']) && $_FILES['foto']['size']>0){
    $ext = explode('.', $_FILES['foto']['name']);
    $ext = strtolower(end($ext));
    // var_dump($ext);
    // die;
    if(in_array($ext, $valid_ext)){
        //Tells you if its all ok
        header('Location: sukses.html');
        // upload foto
        move_uploaded_file($_FILES['foto']['tmp_name'], 'upload/' . $foto);

        //Writes the information to the database
        mysqli_query($conn, "INSERT INTO dns_pesan (`nama`, `telepon`, `transfer`, `foto`, `pesan`)
        VALUES ('$nama', '$telepon', '$transfer', '$foto','$pesan')") ;


    }
        else{
            echo "<script type='text/javascript'>
            alert('Upload Hanya Foto Saja !');
            window.location.replace('konfirmasi.html');
        </script>";

        }
    }
    else {
        //Gives and error if its not
        mysqli_query($conn, "INSERT INTO dns_pesan (`nama`, `telepon`, `transfer`, `pesan`)
        VALUES ('$nama', '$telepon', '$transfer', '$pesan')") ;
        header('Location: sukses.html');
}

?>