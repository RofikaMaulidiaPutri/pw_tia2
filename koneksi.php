<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_tia2";

$koniksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$koniksi) {
    die("koneksi gagal:" . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}

?>