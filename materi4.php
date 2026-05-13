<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Database PHP</title>

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
    max-width:1200px;
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
    margin-bottom:30px;
}

h2{
    color:#7c3aed;
    margin-bottom:20px;
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

button,
input[type="submit"]{
    padding:14px 25px;
    border:none;
    border-radius:12px;
    cursor:pointer;
    color:white;
    font-size:16px;
    font-weight:bold;
    transition:0.3s;
    background:linear-gradient(135deg,#7c3aed,#2563eb);
}

button:hover,
input[type="submit"]:hover{
    transform:scale(1.05);
}

.alert{
    margin-top:20px;
    padding:15px;
    border-radius:12px;
    background:#ede9fe;
    color:#5b21b6;
    font-weight:bold;
}

.table-box{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

table th{
    background:#7c3aed;
    color:white;
    padding:15px;
}

table td{
    padding:15px;
    background:#f9fafb;
    border-bottom:1px solid #ddd;
}

table tr:hover td{
    background:#ede9fe;
}

.edit{
    text-decoration:none;
    padding:8px 15px;
    border-radius:8px;
    background:#3b82f6;
    color:white;
    font-size:14px;
}

.hapus{
    text-decoration:none;
    padding:8px 15px;
    border-radius:8px;
    background:#ef4444;
    color:white;
    font-size:14px;
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

<?php
include "koneksi.php";
?>

<div class="container">

    <div class="hero">

        <div class="hero-text">

            <div class="tag">
                🗄️ Materi Database PHP
            </div>

            <h1>
                CRUD <span>Database</span><br>
                PHP MySQL
            </h1>

            <p>
                Belajar menambahkan, menampilkan,
                mengedit, dan menghapus data user
                menggunakan PHP dan MySQL.
            </p>

        </div>

        <div class="hero-image">

            <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png">

        </div>

    </div>

    <div class="card">

        <h2>➕ Tambah Data User</h2>

        <form action="" method="post">

            Username:
            <input type="text" name="username">

            Password:
            <input type="password" name="password">

            Nama:
            <input type="text" name="nama">

            Email:
            <input type="text" name="email">

            <input type="submit" value="Kirim Data" name="Kirim">

        </form>

<?php

if (isset($_POST['Kirim'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO user (username,password,nama,email)
              VALUES ('$username','$password','$nama','$email')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<div class='alert'>✅ Data berhasil ditambahkan</div>";
    } else {
        echo "<div class='alert'>❌ Data gagal ditambahkan</div>";
    }
}
?>

    </div>

    <div class="card">

        <h2>📋 Data User</h2>

        <div class="table-box">

        <table>

            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>

<?php

$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>

            <tr>

                <td><?= $row['username']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['email']; ?></td>

                <td>

                    <a class="edit"
                    href="materi4.php?Edit=<?= $row['ID']; ?>">
                    Edit
                    </a>

                    <a class="hapus"
                    href="materi4.php?hapus=<?= $row['ID']; ?>"
                    onclick="return confirm('Yakin mau hapus?')">
                    Hapus
                    </a>

                </td>

            </tr>

<?php
}
?>

        </table>

        </div>

    </div>

<?php

if (isset($_GET['Edit'])) {

    $ID = $_GET['Edit'];

    $query = "SELECT * FROM user WHERE ID = $ID";

    $result = mysqli_query($koneksi, $query);

    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $password = $row['password'];
    $nama = $row['nama'];
    $email = $row['email'];

?>

    <div class="card">

        <h2>✏️ Edit Data User</h2>

        <form action="" method="post">

            <input type="hidden" name="ID" value="<?= $ID; ?>">

            Username:
            <input type="text" name="username" value="<?= $username; ?>">

            Password:
            <input type="password" name="password" value="<?= $password; ?>">

            Nama:
            <input type="text" name="nama" value="<?= $nama; ?>">

            Email:
            <input type="text" name="email" value="<?= $email; ?>">

            <input type="submit" value="Update Data" name="Update">

        </form>

    </div>

<?php
}

if (isset($_POST['Update'])) {

    $ID = $_POST['ID'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "UPDATE user SET
              username = '$username',
              password = '$password',
              nama = '$nama',
              email = '$email'
              WHERE ID = $ID";

    if (mysqli_query($koneksi, $query)) {

        echo "<div class='card'>";
        echo "<div class='alert'>✅ Data berhasil diupdate</div>";
        echo "</div>";

    } else {

        echo "<div class='card'>";
        echo "<div class='alert'>❌ Data gagal diupdate</div>";
        echo "</div>";

    }
}
?>

</div>

</body>
</html>