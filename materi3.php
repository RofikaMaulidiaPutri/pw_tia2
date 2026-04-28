<form method="POST">
    Angka 1:
    <input type="number" name="angka1"><br><br>

    Angka 2:
    <input type="number" name="angka2"><br><br>

    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
function tambah($a, $b){
    return $a + $b;
}

function kurang($a, $b){
    return $a - $b;
}

function kali($a, $b){
    return $a * $b;
}

function bagi($a, $b){
    if($b == 0){
        return "Tidak bisa dibagi dengan nol";
    }
    return $a / $b;
}

if(isset($_POST['hitung'])){
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];

    echo "<h3>Hasil:</h3>";
    echo "Penjumlahan: " . tambah($a, $b) . "<br>";
    echo "Pengurangan: " . kurang($a, $b) . "<br>";
    echo "Perkalian: " . kali($a, $b) . "<br>";
    echo "Pembagian: " . bagi($a, $b) . "<br>";
}
?>