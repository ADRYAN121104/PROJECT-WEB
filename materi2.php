<form method="POST">
    Masukkan Angka : <input type="number" name="angka"<br>
    <input type="submit" value="Kirim">
</form>

<?php
if(isset($_POST['angka'])){
    $data = $_POST['angka'];
    for($i=1; $i<=$data;$i++){
     if($i % 2 == 0){
            echo "Angka $i adalah Genap <br>";
        } else {
            echo "Angka $i adalah Ganjil <br>";
        }  
    }


}
?>



<?php
//looping while dan do  while 
echo "<br>ini perulangan dengan while<br>";

if (isset($_POST['angka'])) {
    $data = $_POST['angka'];
    $i = 1;

    while ($i <= $data) {
        if ($i % 2 == 0) {
            echo "Angka $i <br>";
        }
        $i++; 
    }
}
?>





<?php
// do while
echo "<br>ini perulangan dengan do while<br>";
if (isset($_POST['angka'])) {
    $data = $_POST['angka'];
    $i = 1;

    do {
        echo "Angka: $i <br>";
        $i++;
    } while ($i <= $data);
}
?>


