<form method="POST">
    Masukan Angka:
    <input type="text" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
function pisahGenapGanjil($max){
    $genap = [];
    $ganjil = [];
    $totalGenap = 0;
    $totalGanjil = 0;

    for($i = 1; $i <= $max; $i++){
        if($i % 2 == 0){
            $genap[] = $i;
            $totalGenap += $i; 
        } else {
            $ganjil[] = $i;
            $totalGanjil += $i;
        }
    }

    echo "<br>Bilangan Genap: " . implode(", ", $genap) . "<br>";
    echo "Total Genap: $totalGenap <br>";

    echo "<br>Bilangan Ganjil: " . implode(", ", $ganjil) . "<br>";
    echo "Total Ganjil: $totalGanjil <br>";
}

if(isset($_POST['angka'])){
    $angka = $_POST['angka'];
    pisahGenapGanjil($angka);
}
?>