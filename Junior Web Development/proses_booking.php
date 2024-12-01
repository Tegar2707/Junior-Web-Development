<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nomor_identitas = $_POST['nomor_identitas'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $tanggal_pesan = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['tanggal_pesan'])));
    $durasi_menginap = $_POST['durasi_menginap'];
    $breakfast = isset($_POST['breakfast']) ? 1 : 0;
    // Debugging
    echo "Tipe Kamar: " . $tipe_kamar . "<br>";
    // Hitung total bayar dan diskon
    $harga = 0;
    if ($tipe_kamar === 'standar') {
        $harga = 500000;
    } else if ($tipe_kamar === 'deluxe') {
        $harga = 800000;
    } else if ($tipe_kamar === 'family') {
        $harga = 1200000;
    }

    $total_bayar = $harga * $durasi_menginap;
    $diskon = 0;

    if ($durasi_menginap > 3) {
        $diskon = 10; // Diskon 10%
        $total_bayar *= 0.9;
    }

    if ($breakfast) {
        $total_bayar += 80000;
    }

    $sql = "INSERT INTO bookings (nama_pemesan, jenis_kelamin, nomor_identitas, tipe_kamar, tanggal_pesan, durasi_menginap, termasuk_breakfast, diskon, total_bayar)
            VALUES ('$nama', '$jenis_kelamin', '$nomor_identitas', '$tipe_kamar', '$tanggal_pesan', '$durasi_menginap', '$breakfast', '$diskon', '$total_bayar')";

    if ($conn->query($sql) === TRUE) {
        echo "Pemesanan berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>