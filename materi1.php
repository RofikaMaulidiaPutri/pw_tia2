<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Variabel dan Tipe Data PHP</title>

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

.section{
    margin-bottom:30px;
}

.section h2{
    color:#7c3aed;
    margin-bottom:15px;
}

.box{
    background:#f9fafb;
    border-left:6px solid #7c3aed;
    padding:18px;
    border-radius:15px;
    margin-bottom:15px;
    transition:0.3s;
}

.box:hover{
    transform:translateX(5px);
    background:#ede9fe;
}

hr{
    margin:25px 0;
    border:none;
    height:2px;
    background:#ddd;
}

.result{
    color:#2563eb;
    font-weight:bold;
}

@media(max-width:768px){

    .hero{
        text-align:center;
    }

    .hero-text h1{
        font-size:40px;
    }

}

</style>

</head>
<body>

<div class="container">

    <div class="hero">

        <div class="hero-text">

            <div class="tag">
                📘 Materi Variabel PHP
            </div>

            <h1>
                Variabel &
                <span>Tipe Data</span>
            </h1>

            <p>
                Belajar dasar PHP mulai dari variabel,
                operator matematika, percabangan,
                dan cek bilangan genap ganjil.
            </p>

        </div>

        <div class="hero-image">

            <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png">

        </div>

    </div>

    <div class="card">

<?php

echo "<div class='section'>";

echo "<h2>🌍 Hello World</h2>";

echo "<div class='box'>";
echo "Hello World";
echo "</div>";

echo "</div>";

$nama   = "PonzyBoy";
$umur   = 18;
$tinggi = 167.9;
$hobi   = ["gamers", "olaraga", " dan berdoa"];

echo "<hr>";

echo "<div class='section'>";

echo "<h2>👤 Data Diri</h2>";

echo "<div class='box'>";
echo "Nama saya <span class='result'>$nama</span>, 
Umur saya <span class='result'>$umur</span>, 
Tinggi saya <span class='result'>$tinggi</span>, 
Hobi saya <span class='result'>{$hobi[0]}, {$hobi[1]}, {$hobi[2]}</span>";
echo "</div>";

echo "</div>";

$n1 = 4;
$n2 = 5;

echo "<hr>";

echo "<div class='section'>";

echo "<h2>🧮 Operasi Matematika</h2>";

echo "<div class='box'>";
echo "Hasil perkalian = <span class='result'>" . ($n1 * $n2) . "</span>";
echo "</div>";

echo "<div class='box'>";
echo "Hasil penjumlahan = <span class='result'>" . ($n1 + $n2) . "</span>";
echo "</div>";

echo "<div class='box'>";
echo "Hasil pengurangan = <span class='result'>" . ($n1 - $n2) . "</span>";
echo "</div>";

echo "<div class='box'>";
echo "Hasil pembagian = <span class='result'>" . ($n1 / $n2) . "</span>";
echo "</div>";

echo "</div>";

$operator = "kali";

echo "<hr>";

echo "<div class='section'>";

echo "<h2>⚡ Pilihan Operator</h2>";

echo "<div class='box'>";

if ($operator == "tambah") {
    echo "Hasil penjumlahan = <span class='result'>" . ($n1 + $n2) . "</span>";
} elseif ($operator == "kurang") {
    echo "Hasil pengurangan = <span class='result'>" . ($n1 - $n2) . "</span>";
} elseif ($operator == "kali") {
    echo "Hasil perkalian = <span class='result'>" . ($n1 * $n2) . "</span>";
} elseif ($operator == "bagi") {
    echo "Hasil pembagian = <span class='result'>" . ($n1 / $n2) . "</span>";
} else {
    echo "Operator tidak valid!";
}

echo "</div>";

echo "</div>";

echo "<hr>";

echo "<div class='section'>";

echo "<h2>🔢 Cek Genap / Ganjil</h2>";

echo "<div class='box'>";

if ($n1 % 2 == 0) {
    echo "$n1 adalah bilangan <span class='result'>GENAP</span>";
} else {
    echo "$n1 adalah bilangan <span class='result'>GANJIL</span>";
}

echo "</div>";

echo "<div class='box'>";

if ($n2 % 2 == 0) {
    echo "$n2 adalah bilangan <span class='result'>GENAP</span>";
} else {
    echo "$n2 adalah bilangan <span class='result'>GANJIL</span>";
}

echo "</div>";

echo "</div>";

?>

    </div>

</div>

</body>
</html>