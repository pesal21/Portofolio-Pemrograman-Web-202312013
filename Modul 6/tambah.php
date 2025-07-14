<?php
include 'koneksi.php';

// Mengambil data dari form
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Query untuk menyisipkan data
$sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Arahkan kembali ke halaman utama jika berhasil
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();