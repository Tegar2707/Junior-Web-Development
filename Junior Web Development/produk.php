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

    <section id="produk">
        <h2>Produk</h2>
        <div style="display: flex; justify-content: space-between;">
            <div style="width: 30%; text-align: center;">
                <img src="standar.jpg" alt="Standar Room" style="width: 100%; margin-bottom: 10px;">
                <h3>Standar Room</h3>
                <p>Fasilitas: Tempat tidur nyaman, AC, TV, Wi-Fi gratis, Kamar mandi dalam.</p>
            </div>
            <div style="width: 30%; text-align: center;">
                <img src="deluxe.jpg" alt="Deluxe Room" style="width: 100%; margin-bottom: 10px;">
                <h3>Deluxe Room</h3>
                <p>Fasilitas: Tempat tidur king size, AC, TV layar datar, Wi-Fi gratis, Kamar mandi dalam dengan bathtub, Mini bar.</p>
            </div>
            <div style="width: 30%; text-align: center;">
                <img src="family.jpg" alt="Family Room" style="width: 100%; margin-bottom: 10px;">
                <h3>Family Room</h3>
                <p>Fasilitas: Dua tempat tidur queen size, AC, TV layar datar, Wi-Fi gratis, Kamar mandi dalam, Area duduk, Mini bar.</p>
            </div>
        </div>
    </section>

</body>
</html>