<form method ="POST">
  masukan Angka : <input type = "number" name ="angka"><br>
  <input type="submit" value="Kirim">
</form>

<?php
if(isset($_POST['angka'])) {
      $data = $_POST['angka'];
      for ($i=1; $i<=$data;$i++){
            echo "Angka $i ";
            
            if($i % 2 == 0){
                  echo "(Genap)";
            } else {
                  echo "(Ganjil)";
            }

            echo "<br>";
      }
}
?>

// Looping While dan Do While

<?php
echo "<br> Ini perulangan While <br>";

if(isset($_POST['angka'])){
    $data = $_POST['angka'];
    $i = 1;

    while($i <= $data){
        echo "Angka $i <br>";
        $i++;
    }

    echo "<br> Ini perulangan Do While <br>";

    $i = 1;
    do{
        echo "Angka $i <br>";
        $i++;
    }while($i <= $data);
}
?>