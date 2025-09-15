<?php 
include "koneksi.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
    <style>
        body { font-family: Arial; background: #f4f4f9; padding: 20px; }
        form { width: 300px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
        input { width: 100%; padding: 8px; margin: 6px 0; }
        button { background: #FFC107; border: none; padding: 10px; width: 100%; cursor: pointer; }
        a { display: block; margin-top: 10px; text-align: center; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Ubah Barang</h2>
    <form method="post">
        <input type="text" name="nama_barang" value="<?= $row['nama_barang'] ?>" required>
        <input type="number" name="stok" value="<?= $row['stok'] ?>" required>
        <input type="number" name="harga" value="<?= $row['harga'] ?>" required>
        <button type="submit" name="ubah">Ubah</button>
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['ubah'])) {
        $nama  = $_POST['nama_barang'];
        $stok  = $_POST['stok'];
        $harga = $_POST['harga'];

        $query = mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang='$id'");
        if ($query) {
            echo "<script>alert('Data berhasil diubah!'); window.location='index.php';</script>";
        }
    }
    ?>
</body>
</html>
