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

<table border="1" cellpading="10" cellpacing="0">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
</table>
<?php
$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);
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
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?= $row['username']; ?></td>
        <td><?= $row['password']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['email']; ?></td>
        <td>
            <a href="materi4.php?id=<?= $row['ID']; ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['ID']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
        </td>
    </tr>
<?php
}
?>
</table>