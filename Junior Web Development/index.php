<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #333;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #555;
        }
        .btn-success {
            background-color: #28a745;
            color: #fff;
        }
        .btn-success:hover {
            background-color: #218838;
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

    <section id="pesan">
        <h2>Pesan Kamar</h2>
        <form method="post" action="proses_booking.php">
            <div class="form-group">
                <label for="nama">Nama Pemesan:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nomor_identitas">Nomor Identitas:</label>
                <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" pattern="\d{16}" title="Isian salah..data harus 16 digit" required>
            </div>

            <div class="form-group">
                <label for="tipe_kamar">Tipe Kamar:</label>
                <select class="form-control" id="tipe_kamar" name="tipe_kamar">
                    <option value="standar">Standar</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="family">Family</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_pesan">Tanggal Pesan:</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
            </div>

            <div class="form-group">
                <label for="durasi_menginap">Durasi Menginap:</label>
                <input type="number" class="form-control" id="durasi_menginap" name="durasi_menginap" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="breakfast" name="breakfast">
                <label class="form-check-label" for="breakfast">Termasuk Breakfast</label>
            </div>

            <div class="form-group">
                <label for="total_bayar">Total Bayar:</label>
                <input type="text" class="form-control" id="total_bayar" name="total_bayar" readonly>
            </div>

            <button type="button" class="btn btn-primary" onclick="hitungTotal()">Hitung Total Bayar</button>
            <button type="submit" class="btn btn-success">Pesan</button>
        </form>
    </section>

    <!-- Script JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date();
            var tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);

            var day = ("0" + tomorrow.getDate()).slice(-2);
            var month = ("0" + (tomorrow.getMonth() + 1)).slice(-2);
            var year = tomorrow.getFullYear();

            var minDate = year + "-" + month + "-" + day;
            document.getElementById('tanggal_pesan').setAttribute('min', minDate);
        });

        function hitungTotal() {
            var tipe_kamar = document.getElementById('tipe_kamar').value;
            var durasiMenginap = parseInt(document.getElementById('durasi_menginap').value);
            var breakfast = document.getElementById('breakfast').checked;
            var harga = 0;

            if (tipe_kamar === 'standar') {
                harga = 500000;
            } else if (tipe_kamar === 'deluxe') {
                harga = 800000;
            } else if (tipe_kamar === 'family') {
                harga = 1200000;
            }

            var total = harga * durasiMenginap;

            if (durasiMenginap > 3) {
                total *= 0.9; // Diskon 10%
            }

            if (breakfast) {
                var breakfastDays = durasiMenginap > 3 ? 3 : durasiMenginap;
                total += 80000 * breakfastDays;
            }

            console.log("Tipe Kamar: " + tipe_kamar);
            console.log("Durasi Menginap: " + durasiMenginap);
            console.log("Breakfast: " + breakfast);
            console.log("Harga Kamar: " + harga);
            console.log("Total Sebelum Diskon: " + (harga * durasiMenginap));
            console.log("Total Setelah Diskon: " + total);

            document.getElementById('total_bayar').value = 'Rp ' + total.toLocaleString();
        }
    </script>
</body>
</html>