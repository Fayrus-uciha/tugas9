<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <style>
        body { font-family: Arial; background: #f4f4f9; padding: 20px; }
        form { width: 300px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
        input { width: 100%; padding: 8px; margin: 6px 0; }
        button { background: #2196F3; color: white; border: none; padding: 10px; width: 100%; cursor: pointer; }
        a { display: block; margin-top: 10px; text-align: center; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Tambah Barang</h2>
    <form method="post">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama  = $_POST['nama_barang'];
        $stok  = $_POST['stok'];
        $harga = $_POST['harga'];

        $query = mysqli_query($koneksi, "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama','$stok','$harga')");
        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
        }
    }
    ?>
</body>
</html>
