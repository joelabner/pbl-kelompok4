<?php
// Mulai HTML
echo '<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pemesanan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

<div class="w3-container w3-display-container" style="height:100vh;">
  <div class="w3-display-middle w3-card-4 w3-white w3-padding-large w3-animate-opacity w3-center" style="max-width:600px;">';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nik = $_POST['nik'] ?? '';
    $jumlah = $_POST['jumlah'] ?? '';

    // Validasi NIK: Harus 16 digit angka
    if (!preg_match('/^\d{16}$/', $nik)) {
        echo '<p class="w3-text-red w3-xlarge">❌ NIK tidak valid.<br>Harus terdiri dari 16 digit angka.</p>';
        echo '<a href="pbl.html" class="w3-button w3-margin-top w3-blue">Kembali ke Form</a>';
        echo '</div></div></body></html>';
        exit;
    }

    // Validasi jumlah: Harus angka positif
    if (!is_numeric($jumlah) || $jumlah <= 0) {
        echo '<p class="w3-text-red w3-xlarge">❌ Jumlah pesanan tidak valid.</p>';
        echo '<a href="pbl.html" class="w3-button w3-margin-top w3-blue">Kembali ke Form</a>';
        echo '</div></div></body></html>';
        exit;
    }

    // Hitung total harga
    $harga_per_tabung = 15000;
    $total = $jumlah * $harga_per_tabung;

    // Kalau lolos validasi
    echo '<p class="w3-text-green w3-xlarge">✅ Pemesanan berhasil diproses!</p>';
    echo "<p><strong>NIK:</strong> $nik<br>";
    echo "<strong>Jumlah LPG:</strong> $jumlah tabung<br>";
    echo "<strong>Total:</strong> Rp " . number_format($total, 0, ',', '.') . "</p>";
    echo '<a href="pbl.html" class="w3-button w3-margin-top w3-green">Kembali ke Form</a>';
} else {
    echo '<p class="w3-text-red w3-xlarge">Akses langsung tidak diperbolehkan.</p>';
}

echo '</div></div></body></html>';
?>
