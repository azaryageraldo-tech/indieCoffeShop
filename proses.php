<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Prakiraan Parkir</title>
</head>
<body>
    <h1>Hasil Prakiraan Parkir</h1>
    <?php
    // Memeriksa apakah data telah dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $no_plat = $_POST["no_plat"];
        $jenis_kendaraan = $_POST["jenis_kendaraan"];
        $jam_masuk = $_POST["jam_masuk"];
        $jam_keluar = $_POST["jam_keluar"];

        // Proses perhitungan tarif parkir (Anda dapat menyesuaikan tarif sesuai kebutuhan)
        $tarif = hitungTarif($jenis_kendaraan, $jam_masuk, $jam_keluar);

        // Menampilkan hasil
        echo "<p>Nomor Plat: $no_plat</p>";
        echo "<p>Jenis Kendaraan: $jenis_kendaraan</p>";
        echo "<p>Jam Masuk: $jam_masuk</p>";
        echo "<p>Jam Keluar: $jam_keluar</p>";
        echo "<p>Tarif Parkir: $tarif</p>";
    }

    // Fungsi untuk menghitung tarif parkir
    function hitungTarif($jenis_kendaraan, $jam_masuk, $jam_keluar) {
        // Logika perhitungan tarif sesuai jenis kendaraan dan jam parkir
        // Anda dapat menambahkan aturan sesuai kebijakan parkir Anda
        // Contoh: $tarif = $jam_parkir * $tarif_per_jam;
        // Di sini, $jenis_kendaraan digunakan untuk menentukan tarif yang berbeda
        return "Hitung tarif sesuai logika Anda di sini";
    }
    ?>
</body>
</html>

