<?php
$host = "localhost";
$user = "xirpl1-17"; // sesuaikan dengan username MySQL
$pass = "0087592744";     // sesuaikan dengan password MySQL
$db   = "db_xirpl1-17_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
