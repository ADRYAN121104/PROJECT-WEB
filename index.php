<?php
$nama = "adryan";
$umur = 17;
$tinggi = 175.9;
$hobi = ["membaca", "bermain game", "berolahraga"];
 echo "nama saya $nama, umur saya $umur tahun, tinggi saya $tinggi cm, dan hobi saya adalah ". implode(",", $hobi);

 echo "<br> <br>==============================<br><br>";

//oprator dan kondisi (if else)


//operator penjumlahan
 $nilai1 = 10;
 $nilai2 = 20;
 $hasil = $nilai1 + $nilai2;

 echo "hasil dari $nilai1 + $nilai2 = $hasil";

  echo "<br> <br>==============================<br><br>";

//operator pembagian
$a = 12;
$b = 4;

$hasil = $a / $b;

echo "Pembagian: $a / $b = $hasil";



  echo "<br> <br>==============================<br><br>";
  //operator perkalian 
$a = 12;
$b = 4;

$hasil = $a * $b;

echo "Perkalian: $a x $b = $hasil";

  echo "<br> <br>==============================<br><br>";
//oprator perbandingan
$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai anda A";
} elseif ($nilai >= 80) {
    echo "Nilai anda B";
} elseif ($nilai >= 70) {
    echo "Nilai anda C";
} else {
    echo "Nilai anda D";
}

//operator logika
$bilangan1 = 7; 
if ($bilangan1 % 2 == 0) {
    echo "bilangan $bilangan1 adalah genap";
} else {
    echo "bilangan $bilangan1 adalah ganjil";
}

?>