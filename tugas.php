<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php dan html</title>
    <link rel="stylesheet" href="gunung.css">
</head>
<body>
    <form action="" method="post">
    Nik : <input type="text" name="Nik"><br>
    nama : <input type="text" name="nama"><br> 
    jumlah : <input type="text" name="jumlah"><br>
    tanggal : <input type="date" name="tanggal"><br>
    nohp : <input type="text" name="nohp"><br>
    <input type="submit" value="kirim data" name="kirim"><br>
    
     </form>



<?php
$koneksi = mysqli_connect("localhost", "root", "", "gunung");
if (isset($_POST['kirim'])) {
    $Nik = $_POST['Nik'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $nohp = $_POST['nohp'];

    $query = "INSERT INTO user (Nik, nama, jumlah, tanggal, nohp) VALUES ('$Nik', '$nama', '$jumlah', '$tanggal', '$nohp')";
    if (mysqli_query($koneksi, $query)) {
        echo "berhasil memasukkan data";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>id</th>
        <th>Nik</th>
        <th>nama</th>
        <th>jumlah</th>
        <th>tanggal</th>
        <th>nohp</th>
    </tr>

    <?php
    $query = "SELECT * FROM user";
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['Nik'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['jumlah'] . "</td>";
        echo "<td>" . $row['tanggal'] . "</td>";
        echo "<td>" . $row['nohp'] . "</td>";
        echo "</tr>";
     }
     ?>






</body>
</html>