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