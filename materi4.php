<form action="" method="post">
    username:<input type="text" name="username"><br>
    password:<input type="password" name="password"><br>
    nama:<input type="text" name="nama"><br>
    email:<input type="text" name="email"><br>
    <input type="submit" value="Kirim Data" name ="Kirim"><br>
</form>

<?php
include "koneksi.php";
if (isset($_POST['Kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO user (username,password,nama,email) VALUES ('$username','$password','$nama','$email')";
    
    if (mysqli_query($koneksi, $query)){
        echo "Data berhasil ditambahkan";
    }else {
        echo "Data gagal ditambahkan";
    }
}

?>