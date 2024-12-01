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
    <section id="tentang">
    <article>
    <h2>Sejarah Kami</h2>
    <div class="content">
        <img src="heraplace1.jpg" alt="Hotel Contoh" style="width: 40%; height: auto; margin-right: 20px; border-radius: 5px;">
        <div>
            <p style="text-align: justify;">Heraplace adalah hotel bintang 5 yang memancarkan kemewahan di pusat kota Jakarta. Diresmikan pada awal tahun 2000-an, Heraplace didirikan dengan visi menjadi pelopor dalam menghadirkan pengalaman menginap berkelas dunia di Indonesia. Lokasinya yang strategis, di tengah hiruk-pikuk ibu kota, menjadikan hotel ini sebagai destinasi pilihan utama bagi wisatawan mancanegara, pelaku bisnis, hingga penduduk lokal yang mendambakan pelarian sementara dari rutinitas. Arsitektur Heraplace dirancang dengan kombinasi gaya modern dan nuansa khas budaya Indonesia, menciptakan harmoni sempurna antara keanggunan global dan kearifan lokal. Memasuki lobi yang megah, para tamu akan disambut dengan interior mewah yang dihiasi karya seni lokal, menyimbolkan kekayaan budaya Nusantara. Setiap sudut Heraplace dirancang dengan detail tinggi, mulai dari furnitur berkelas, pencahayaan elegan, hingga panorama kota yang memukau dari kamar-kamarnya.</p>
            <p style="text-align: justify;">Heraplace menawarkan 300 kamar dan suite eksklusif yang dirancang untuk memenuhi kebutuhan tamu dengan berbagai preferensi. Setiap kamar dilengkapi dengan teknologi modern, tempat tidur premium, dan layanan kamar 24 jam yang memberikan kenyamanan maksimal. Tidak hanya itu, Heraplace juga menyediakan beragam fasilitas unggulan seperti restoran dengan menu internasional dan lokal yang dikurasi oleh koki ternama, bar yang menghadirkan suasana santai dengan pemandangan malam Jakarta, serta pusat kebugaran canggih yang dilengkapi spa untuk relaksasi total. Sebagai destinasi pilihan untuk acara dan pertemuan, Heraplace memiliki ballroom megah yang mampu menampung hingga 1.000 tamu, serta beberapa ruang rapat multifungsi yang dilengkapi teknologi mutakhir. Dalam setiap acara, tim profesional Heraplace selalu siap memberikan pelayanan terbaik untuk memastikan pengalaman yang sempurna bagi para tamu. Seiring berjalannya waktu, Heraplace tidak hanya menjadi tempat menginap, tetapi juga menjadi ikon gaya hidup mewah di Jakarta. Hotel ini telah menjadi saksi berbagai acara penting, mulai dari perayaan pernikahan, konferensi internasional, hingga peluncuran produk eksklusif. Dengan komitmen pada keunggulan dan inovasi, Heraplace terus memperkuat reputasinya sebagai simbol kemewahan dan kenyamanan di Indonesia.</p>
            <p style="text-align: justify;">Lebih dari sekadar hotel, Heraplace adalah tempat di mana pengalaman tak terlupakan diciptakan—sebuah destinasi yang memadukan keramahan khas Indonesia dengan standar perhotelan global yang tiada duanya.</p>
        </div>
    </div>
</article>
        <h3>Tentang Kami</h3>
        <p>Alamat: Jl. Choir No. 3, Jakarta Pusat</p>
        <p>No Telp: (021) 12345678</p>
        <p>Email: heraplace@peraplace.com</p>
    </section>

</body>
</html>