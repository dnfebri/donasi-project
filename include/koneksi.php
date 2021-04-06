<?php
$conn = mysqli_connect("localhost", "root", "", "db_gabungan_upload");
    if (!$conn){
        die ("Koneksi ke Engine MySQL server Gagal !");
    }

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
    // $Koneksi = mysqli_select_db();
    //     if (!$Koneksi){
    //         die ("Koneksi ke Database Gagal !");
    //     }


    function donasiTerkumpul(){
        $donasi = query("SELECT * FROM dns_donasi");
        $keluar = query("SELECT * FROM dns_keluar");

        $tdonasi = 0;
        foreach ($donasi as $d) :
            $tdonasi += $d['tdonasi'];
        endforeach;
        
        $tkeluar = 0;
        foreach ($keluar as $k) :
            $tkeluar += $k['tkeluar'];
        endforeach;

        $tsisa = $tdonasi - $tkeluar;
        return $tsisa;

    }


?>
