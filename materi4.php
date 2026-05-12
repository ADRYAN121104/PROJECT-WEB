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

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>password</th>
        <th>email</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>

    <?php
    $query = "SELECT * FROM user";
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
       echo "<td>
<a href='?aksi=edit&id=" . $row['id'] . "'>Edit</a> | <a href='?aksi=hapus&id=" . $row['id'] . "' onclick=\"return confirm('Yakin hapus?')\">Delete</a>
</td>";
        echo "</tr>";
        
     }


        function edit($id) {
            global $koneksi;
            $query = "SELECT * FROM user WHERE id = $id";
            $result = mysqli_query($koneksi, $query);
            return mysqli_fetch_assoc($result);
            if (isset($_POST['update'])) {
                $nama = $_POST['nama'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];

                $query = "UPDATE user SET nama='$nama', password='$password', email='$email', alamat='$alamat' WHERE id=$id";
                return mysqli_query($koneksi, $query);
            }
        }


            function delete($id) {
                global $koneksi;
                $query = "DELETE FROM user WHERE id = $id";
                return mysqli_query($koneksi, $query);
                if (isset($_POST['delete'])) {
                    $query = "DELETE FROM user WHERE id = $id";
                    return mysqli_query($koneksi, $query);
                }
            }
    ?>
    </table>



    // proses edit
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM user WHERE id = $id";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);

        $username = $row['nama'];
        $password = $row['password'];
        $email = $row['email'];
        $alamat = $row['alamat'];

        ?>
<form action="" method="post">
    <input type="text" name="nama" value="<?= $nama ?>"><br>
    <input type="password" name="password" value="<?= $password ?>"><br>
    <input type="text" name="email" value="<?= $email ?>"><br>
    <input type="text" name="alamat" value="<?= $alamat ?>"><br>
    <input type="submit" value="update data" name="update"><br>
</form>
<?php

        if (isset($_POST['update'])) {
            $nama = $_POST['nama'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];

            $query = "UPDATE user SET nama='$nama', password='$password', email='$email', alamat='$alamat' WHERE id=$id";
            if (mysqli_query($koneksi, $query)) {
                echo "berhasil update data";
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        }
       
    }