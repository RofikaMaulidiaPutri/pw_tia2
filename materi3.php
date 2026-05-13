<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Function PHP</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    min-height:100vh;
    background:linear-gradient(135deg,#020617,#0f172a,#6d28d9);
    color:white;
    padding:40px;
}

.container{
    max-width:1000px;
    margin:auto;
}

.hero{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:40px;
    flex-wrap:wrap;
    margin-bottom:40px;
}

.hero-text{
    flex:1;
    min-width:300px;
}

.tag{
    display:inline-block;
    padding:10px 20px;
    border-radius:30px;
    border:1px solid #8b5cf6;
    background:rgba(255,255,255,0.1);
    margin-bottom:20px;
}

.hero-text h1{
    font-size:55px;
    margin-bottom:20px;
    line-height:1.1;
}

.hero-text span{
    color:#8b5cf6;
}

.hero-text p{
    color:#d1d5db;
    line-height:1.7;
    font-size:18px;
}

.hero-image{
    flex:1;
    min-width:300px;
    text-align:center;
}

.hero-image img{
    width:100%;
    max-width:400px;
    animation:float 3s ease-in-out infinite;
    filter:drop-shadow(0 15px 25px rgba(0,0,0,0.5));
}

@keyframes float{
    0%{
        transform:translateY(0px);
    }
    50%{
        transform:translateY(-15px);
    }
    100%{
        transform:translateY(0px);
    }
}

.card{
    background:white;
    color:#111827;
    border-radius:25px;
    padding:35px;
    box-shadow:0 15px 35px rgba(0,0,0,0.3);
}

h2{
    margin-bottom:20px;
    color:#7c3aed;
}

input{
    width:100%;
    padding:15px;
    margin-top:10px;
    margin-bottom:20px;
    border:none;
    border-radius:12px;
    background:#f3f4f6;
    font-size:16px;
}

button{
    padding:14px 25px;
    border:none;
    border-radius:12px;
    cursor:pointer;
    color:white;
    font-size:16px;
    font-weight:bold;
    margin:5px;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
}

.btn-login{
    background:linear-gradient(135deg,#7c3aed,#2563eb);
}

.btn-tambah{
    background:#22c55e;
}

.btn-kurang{
    background:#f97316;
}

.btn-kali{
    background:#3b82f6;
}

.btn-bagi{
    background:#ec4899;
}

.alert{
    margin-top:20px;
    padding:15px;
    border-radius:12px;
    background:#ede9fe;
    color:#5b21b6;
    font-weight:bold;
}

.hasil{
    margin-top:25px;
    padding:20px;
    border-left:6px solid #7c3aed;
    background:#f9fafb;
    border-radius:15px;
}

@media(max-width:768px){

    .hero{
        text-align:center;
    }

    .hero-text h1{
        font-size:40px;
    }

    button{
        width:100%;
    }

}

</style>
</head>
<body>

<?php
session_start();

function cekLogin($user, $pass){
    $user_benar = "admin";
    $pass_benar = "12345";

    if($user == $user_benar && $pass == $pass_benar){
        return true;
    } else {
        return false;
    }
}

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

$pesan = "";

if(isset($_POST['login'])){
    if(cekLogin($_POST['username'], $_POST['password'])){
        $_SESSION['login'] = true;
        $pesan = "Login berhasil";
    } else {
        $pesan = "Login gagal";
    }
}
?>

<div class="container">

    <div class="hero">

        <div class="hero-text">

            <div class="tag">
                ⚡ Materi Function PHP
            </div>

            <h1>
                Login & <span>Kalkulator</span><br>
                Function PHP
            </h1>

            <p>
                Belajar penggunaan function PHP dengan sistem login
                dan kalkulator interaktif modern.
            </p>

        </div>

        <div class="hero-image">

            <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png">

        </div>

    </div>

    <div class="card">

<?php if(!isset($_SESSION['login'])): ?>

        <form method="POST">

            <h2>🔐 Login</h2>

            Username:
            <input type="text" name="username" placeholder="Masukan username">

            Password:
            <input type="password" name="password" placeholder="Masukan password">

            <button type="submit" name="login" class="btn-login">
                Login
            </button>

        </form>

        <?php
        if($pesan != ""){
            echo "<div class='alert'>$pesan</div>";
        }
        ?>

<?php else: ?>

        <h2>✅ Login berhasil</h2>

        <form method="POST">

            Angka 1:
            <input type="number" name="angka1" placeholder="Masukan angka pertama">

            Angka 2:
            <input type="number" name="angka2" placeholder="Masukan angka kedua">

            <button type="submit" name="tambah" class="btn-tambah">
                Tambah
            </button>

            <button type="submit" name="kurang" class="btn-kurang">
                Kurang
            </button>

            <button type="submit" name="kali" class="btn-kali">
                Kali
            </button>

            <button type="submit" name="bagi" class="btn-bagi">
                Bagi
            </button>

        </form>

<?php
if(isset($_POST['angka1']) && isset($_POST['angka2'])){

    $a = $_POST['angka1'];
    $b = $_POST['angka2'];

    echo "<div class='hasil'>";
    echo "<h3>📌 Hasil:</h3><br>";

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

    echo "</div>";
}
?>

<?php endif; ?>

    </div>

</div>

</body>
</html>