<?php
// fungsi hello
function hello() {
    echo "Selamat datang <br>";
}

hello();

// fungsi penjumlahan
function penjumlahan($a, $b) {
    return $a + $b;
}

// fungsi perkalian
function kali($a, $b) {
    return $a * $b;
}
?>


<form method="post">
    <input type="number" name="a" placeholder="Angka pertama" required>
    <input type="number" name="b" placeholder="Angka kedua" required>
    <button type="submit">Hitung</button>
</form>

<?php
if(isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "Hasil Penjumlahan: " . penjumlahan($a, $b);
    echo "<br>";
    echo "Hasil Perkalian: " . kali($a, $b);
}
?>




<?php

function login($user, $pass) {
    if ($user == "admin" && $pass == "123") {
        return "Login berhasil";
    } else {
        return "Login gagal";
    }
}

if (isset($_POST['login'])) {
    echo login($_POST['username'], $_POST['password']);
}

?>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <br><br>

    <input type="password" name="password" placeholder="Password">
    <br><br>

    <button type="submit" name="login">Login</button>
</form>


<?php

function login1 ($user, $pass) {
    if ($user == "admin" && $pass == "123") {
        return "Login berhasil";
    } else {
        return "Login gagal";
    }   
}

if (isset($_POST['login1'])) {
    echo login1($_POST['username1'], $_POST['password1']);
}
?>
<form method="post">
    <input type="text" name="username1" placeholder="Username">
    <br><br>

    <input type="password" name="password1" placeholder="Password">
    <br><br>

    <button type="submit" name="login1">Login</button>              
</form>
