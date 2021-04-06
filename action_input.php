<?php
    session_start();
    error_reporting(0);
    include "include/koneksi.php";

    $nama           = $_POST['nama'];
    $telepon        = $_POST['telepon'];
    $udonasi        = $_POST['udonasi'];
    $upelaksana     = $_POST['upelaksana'];
    $tdonasi        = $_POST['tdonasi'];

    $_SESSION['nama'] 			= $_POST['nama'];
    $_SESSION['telepon'] 		= $_POST['telepon'];
    $_SESSION['udonasi'] 		= $_POST['udonasi'];
    $_SESSION['upelaksana']     = $_POST['upelaksana'];
    $_SESSION['tdonasi'] 		= $_POST['tdonasi'];

    $input    ="INSERT INTO dns_donasi (nama, telepon, udonasi, upelaksana, tdonasi)
            VALUES ('$nama','$telepon','$udonasi','$upelaksana', '$tdonasi')";
    $query_input =mysqli_query($conn, $input);
        if ($query_input) {
    ?>
        <script language="JavaScript">
            document.location='terimakasih.php';
        </script>
    <?php
    }
    else {
    //Jika Gagal
    echo "Semua data harap diisi";
    }
    //Tutup koneksi engine MySQL
    mysqli_close($conn);

?>
