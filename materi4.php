<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_wisata"
);

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!$koneksi) {
    die("Koneksi gagal");
}

/* TAMBAH DATA */
if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $pasword = $_POST['pasword'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO users(nama,pasword,email,alamat)
              VALUES('$nama','$pasword','$email','$alamat')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error : " . mysqli_error($koneksi);
    }
}

/* HAPUS DATA */
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') {

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id=$id";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Gagal hapus data";
    }
}

/* UPDATE DATA */
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $pasword = $_POST['pasword'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE users 
              SET nama='$nama',
                  pasword='$pasword',
                  email='$email',
                  alamat='$alamat'
              WHERE id=$id";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error : " . mysqli_error($koneksi);
    }
}

?>

<!-- FORM TAMBAH DATA -->

<h2>Tambah Data</h2>

<form action="" method="post">

    Nama :
    <input type="text" name="nama"><br><br>

    Pasword :
    <input type="password" name="pasword"><br><br>

    Email :
    <input type="text" name="email"><br><br>

    Alamat :
    <input type="text" name="alamat"><br><br>

    <input type="submit" value="Kirim Data" name="kirim">

</form>

<br><br>

<!-- TABEL DATA -->

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Pasword</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php

$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";

    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['pasword']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['alamat']."</td>";

    echo "<td>
    <a href='?aksi=edit&id=".$row['id']."'>Edit</a> |
    <a href='?aksi=hapus&id=".$row['id']."' onclick=\"return confirm('Yakin hapus?')\">Delete</a>
    </td>";

    echo "</tr>";
}

?>

</table>

<br><br>

<?php

/* FORM EDIT */

if (isset($_GET['aksi']) && $_GET['aksi'] == 'edit') {

    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    $row = mysqli_fetch_assoc($result);

?>

<h2>Edit Data</h2>

<form action="" method="post">

    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    Nama :
    <input type="text" name="nama" value="<?= $row['nama']; ?>"><br><br>

    Pasword :
    <input type="password" name="pasword" value="<?= $row['pasword']; ?>"><br><br>

    Email :
    <input type="text" name="email" value="<?= $row['email']; ?>"><br><br>

    Alamat :
    <input type="text" name="alamat" value="<?= $row['alamat']; ?>"><br><br>

    <input type="submit" value="Update Data" name="update">

</form>

<?php
}
?>
```
