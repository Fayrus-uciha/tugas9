<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f9; }
        h2 { text-align: center; }
        table { width: 80%; margin: auto; border-collapse: collapse; background: #fff; }
        table, th, td { border: 1px solid #ccc; }
        th { background: #4CAF50; color: white; padding: 10px; }
        td { padding: 8px; text-align: center; }
        a { text-decoration: none; padding: 6px 12px; border-radius: 4px; }
        .tambah { background: #2196F3; color: white; }
        .ubah { background: #FFC107; color: black; }
        .hapus { background: #F44336; color: white; }
    </style>
</head>
<body>
    <h2>DATA BARANG</h2>
    <p style="text-align:center;"><a href="tambah.php" class="tambah">+ Tambah Barang</a></p>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM barang");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>".$row['id_barang']."</td>
                <td>".$row['nama_barang']."</td>
                <td>".$row['stok']."</td>
                <td>Rp ".number_format($row['harga'],0,',','.')."</td>
                <td>
                    <a href='ubah.php?id=".$row['id_barang']."' class='ubah'>Ubah</a> 
                    <a href='hapus.php?id=".$row['id_barang']."' class='hapus' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
