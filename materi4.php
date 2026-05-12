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
    
    $query = "INSERT INTO user (username,password,nama,email)
              VALUES ('$username','$password','$nama','$email')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan";
    }
}
?>

<table border="1" cellpadding="10" cellspacing="0">

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
            <a href="materi4.php?Edit=<?= $row['ID']; ?>">Edit</a> | 
            <a href="delete.php?hapus=<?= $row['ID']; ?>"
            onclick="return confirm('Yakin mau hapus?')">
            Hapus
            </a>
        </td>
    </tr>

<?php
}
?>
</table>

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

    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='ID' value='$ID'>";
    echo "Username :
    <input type='text' name='username' value='$username'><br>";
    echo "Password :
    <input type='password' name='password' value='$password'><br>";
    echo "Nama :
    <input type='text' name='nama' value='$nama'><br>";
    echo "Email :
    <input type='text' name='email' value='$email'><br>";
    echo "<input type='submit' value='Update Data' name='Update'><br>";
    echo "</form>";
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
        echo "Data berhasil diupdate";
    } else {
        echo "Data gagal diupdate";
    }
}
?>