<!DOCTYPE html>
<html>

<head>
    <title>Data Produk</title>
</head>

<body>
    <h2>Daftar Produk GARASI MAJU MOTOR</h2>
    <a href="tambah_data.html">Tambah Produk Baru</a>
    <br><br>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr </thead>
        <tbody>
            <?php
            include 'koneksi.php'; // Menyertakan file koneksi
            $sql = "SELECT id_produk, nama_produk, harga, stok FROM produk";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Loop untuk menampilkan setiap baris data
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id_produk"] . "</td>";
                    echo "<td>" . $row["nama_produk"] . "</td>";
                    echo "<td>" . $row["harga"] . "</td>";
                    echo "<td>" . $row["stok"] . "</td>";
                    echo "<td><a href='form_edit.php?id=" . $row["id_produk"] . "'>Edit</a> | <a href='hapus.php?id=" . $row["id_produk"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>