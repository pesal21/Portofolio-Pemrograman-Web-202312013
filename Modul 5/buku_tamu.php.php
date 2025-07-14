<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Buku Tamu Digital STITEK Bontang</h2>

    <?php
    // Inisialisasi variabel
    $nama = $email = $pesan = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
            $error = "Semua kolom harus diisi!";
        } else {
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $pesan = htmlspecialchars($_POST["pesan"]);

            echo "<div class='result'>";
            echo "<h3>Pesan Anda telah terkirim!</h3>";
            echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Pesan:</strong> $pesan</p>";
            echo "</div>";
        }
    }
    ?>

    <?php if (!empty($error)): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

        <label for="pesan">Pesan / Komentar:</label>
        <textarea id="pesan" name="pesan" rows="4"><?php echo isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : ''; ?></textarea>

        <button type="submit" class="submit-button">Kirim Pesan</button>
    </form>

</body>

</html>