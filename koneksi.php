<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_wisata";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Koneksi Gagal";
    } else {
        echo "Koneksi Berhasil";
    }
?>