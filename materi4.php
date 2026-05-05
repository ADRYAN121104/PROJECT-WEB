<form action="" method="post">
    nama : <input type="text" name="nama"><br>
    password : <input type="password" name="password"><br> 
    email : <input type="text" name="email"><br>
    alamat : <input type="text" name="alamat"><br>
    <input type="submit" value="kirim data" name="kirim"><br>
</form> 

<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_wisata");
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO user (nama, password, email, alamat) VALUES ('$nama', '$password', '$email', '$alamat')";
    if (mysqli_query($koneksi, $query)) {
        echo "berhasil memasukkan data";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>