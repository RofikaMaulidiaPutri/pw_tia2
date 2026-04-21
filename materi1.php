<?php

echo "Hello World";

$nama   = "PonzyBoy";
$umur   = 18;
$tinggi = 167.9;
$hobi   = ["gamers", "olaraga", " dan berdoa"];

echo "<br>";
echo "Nama saya $nama, Umur saya $umur, Tinggi saya $tinggi, Hobi saya {$hobi[0]}, {$hobi[1]}, {$hobi[2]}";

echo "<hr>";

$n1 = 4;
$n2 = 5;

echo "<b>Operasi Matematika:</b><br>";

echo "Hasil perkalian = " . ($n1 * $n2) . "<br>";
echo "Hasil penjumlahan = " . ($n1 + $n2) . "<br>";
echo "Hasil pengurangan = " . ($n1 - $n2) . "<br>";
echo "Hasil pembagian = " . ($n1 / $n2) . "<br>";

echo "<hr>";

$operator = "kali";

echo "<b>Pilihan Operator:</b><br>";

if ($operator == "tambah") {
    echo "Hasil penjumlahan = " . ($n1 + $n2);
} elseif ($operator == "kurang") {
    echo "Hasil pengurangan = " . ($n1 - $n2);
} elseif ($operator == "kali") {
    echo "Hasil perkalian = " . ($n1 * $n2);
} elseif ($operator == "bagi") {
    echo "Hasil pembagian = " . ($n1 / $n2);
} else {
    echo "Operator tidak valid!";
}

echo "<hr>";

echo "<b>Cek Genap / Ganjil:</b><br>";

if ($n1 % 2 == 0) {
    echo "$n1 adalah bilangan GENAP<br>";
} else {
    echo "$n1 adalah bilangan GANJIL<br>";
}

if ($n2 % 2 == 0) {
    echo "$n2 adalah bilangan GENAP<br>";
} else {
    echo "$n2 adalah bilangan GANJIL<br>";
}

echo "<hr>";

?>