<?php
$productId = $_GET['id'];
// Di sini kamu bisa menghubungkan ke database untuk mendapatkan detail produk berdasarkan $productId
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Jeruk Peras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Detail Produk</h1>
        <nav>
            <a href="index.php">Beranda</a>
            <a href="cart.php">Keranjang</a>
        </nav>
    </header>

    <main>
        <h2>Jeruk Peras Segar</h2>
        <img src="c:\Users\user\Downloads\images.jpeg" alt="Jeruk Peras">
        <p>Harga: Rp 30.000</p>
        <p>Deskripsi: Jeruk peras segar, berkualitas tinggi, cocok untuk jus.</p>
        <a href="cart.php?id=1" class="btn">Tambahkan ke Keranjang</a>
    </main>

    <footer>
        <p>&copy; 2024 Jeruk Peras Fresh. All Rights Reserved.</p>
    </footer>
</body>
</html>