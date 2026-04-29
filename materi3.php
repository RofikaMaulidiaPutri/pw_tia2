<?php
session_start();
$user_benar = "admin";
$pass_benar = "12345";

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == $user_benar && $pass == $pass_benar){
        $_SESSION['login'] = true;
        $pesan = "Login berhasil";
    } else {
        $pesan = "Login gagal";
    }
}
?>

<?php if(!isset($_SESSION['login'])): ?>
<form method="POST">
    <h2>Login</h2>
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php 
if(isset($pesan)){
    echo "<p>$pesan</p>";
}
?>

<?php else: ?>
<h3>Login berhasil</h3>

<form method="POST">
    Angka 1:
    <input type="number" name="angka1"><br><br>

    Angka 2:
    <input type="number" name="angka2"><br><br>

    <button type="submit" name="tambah">Tambah</button>
    <button type="submit" name="kurang">Kurang</button>
    <button type="submit" name="kali">Kali</button>
    <button type="submit" name="bagi">Bagi</button>
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

if(isset($_POST['angka1']) && isset($_POST['angka2'])){
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];

    echo "<h3>Hasil:</h3>";

    if(isset($_POST['tambah'])){
        echo "Penjumlahan: " . tambah($a, $b);
    }

    if(isset($_POST['kurang'])){
        echo "Pengurangan: " . kurang($a, $b);
    }

    if(isset($_POST['kali'])){
        echo "Perkalian: " . kali($a, $b);
    }

    if(isset($_POST['bagi'])){
        echo "Pembagian: " . bagi($a, $b);
    }
}
?>

<?php endif; ?>