<?php 
include "koneksi.php"; 
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$id'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
}
?>
