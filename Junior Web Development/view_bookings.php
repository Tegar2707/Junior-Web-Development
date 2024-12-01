<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #556B2F;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            text-align: center;
            margin: 20px 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: inline-block;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #ddd;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #bbb;
        }
        section {
            padding: 20px;
            margin: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
        }
        form input, form select, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        form button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hotel Booking Application</h1>
    </header>
    <nav>
        <ul>
            <li><a href="produk.php">Produk</a></li>
            <li><a href="harga.php">Daftar Harga</a></li>
            <li><a href="tentang.php">Tentang Kami</a></li>
            <li><a href="index.php">Pesan Kamar</a></li>
            <li><a href="view_bookings.php">Lihat Pesanan</a></li>
        </ul>
    </nav>
    
    <?php
    include 'db_connection.php';

    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Nama Pemesan</th><th>Jenis Kelamin</th><th>Nomor Identitas</th><th>Tipe Kamar</th><th>Tanggal Pesan</th><th>Durasi Menginap</th><th>Termasuk Breakfast</th><th>Diskon</th><th>Total Bayar</th><th>Aksi</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nama_pemesan"]."</td><td>".$row["jenis_kelamin"]."</td><td>".$row["nomor_identitas"]."</td><td>".$row["tipe_kamar"]."</td><td>".date('d/m/Y', strtotime($row["tanggal_pesan"]))."</td><td>".$row["durasi_menginap"]."</td><td>".($row["termasuk_breakfast"] ? 'Ya' : 'Tidak')."</td><td>".intval($row["diskon"])."%</td><td>Rp ".number_format($row["total_bayar"], 2, ',', '.')."</td><td><a href='edit_booking.php?id=".$row["id"]."'>Edit</a> | <a href='delete_booking.php?id=".$row["id"]."'>Delete</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

</body>
</html>