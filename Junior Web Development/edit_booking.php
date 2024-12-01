<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nomor_identitas = $_POST['nomor_identitas'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $tanggal_pesan = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['tanggal_pesan'])));
    $durasi_menginap = $_POST['durasi_menginap'];
    $breakfast = isset($_POST['breakfast']) ? 1 : 0;

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
        $breakfastDays = $durasi_menginap > 3 ? 3 : $durasi_menginap;
        $total_bayar += 80000 * $breakfastDays;
    }

    $sql = "UPDATE bookings SET nama_pemesan='$nama', jenis_kelamin='$jenis_kelamin', nomor_identitas='$nomor_identitas', tipe_kamar='$tipe_kamar', tanggal_pesan='$tanggal_pesan', durasi_menginap='$durasi_menginap', termasuk_breakfast='$breakfast', diskon='$diskon', total_bayar='$total_bayar' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Pemesanan berhasil diperbarui!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookings WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Edit Booking</title>
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
                <h2>Edit Booking</h2>
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
            <section>
                <form method="post" action="edit_booking.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Pemesan:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama_pemesan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki" <?php if ($row['jenis_kelamin'] == 'laki') echo 'selected'; ?>>Laki-laki</option>
                            <option value="perempuan" <?php if ($row['jenis_kelamin'] == 'perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nomor_identitas">Nomor Identitas:</label>
                        <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" value="<?php echo $row['nomor_identitas']; ?>" pattern="\d{16}" title="Isian salah..data harus 16 digit" required>
                    </div>

                    <div class="form-group">
                        <label for="tipe_kamar">Tipe Kamar:</label>
                        <select class="form-control" id="tipe_kamar" name="tipe_kamar">
                            <option value="standar" <?php if ($row['tipe_kamar'] == 'standar') echo 'selected'; ?>>Standar</option>
                            <option value="deluxe" <?php if ($row['tipe_kamar'] == 'deluxe') echo 'selected'; ?>>Deluxe</option>
                            <option value="family" <?php if ($row['tipe_kamar'] == 'family') echo 'selected'; ?>>Family</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pesan">Tanggal Pesan:</label>
                        <input type="text" class="form-control" id="tanggal_pesan" name="tanggal_pesan" value="<?php echo date('d/m/Y', strtotime($row['tanggal_pesan'])); ?>" placeholder="dd/mm/yyyy" required>
                    </div>

                    <div class="form-group">
                        <label for="durasi_menginap">Durasi Menginap:</label>
                        <input type="number" class="form-control" id="durasi_menginap" name="durasi_menginap" value="<?php echo $row['durasi_menginap']; ?>" required>
                    </div>

                 <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="breakfast" name="breakfast">
                <label class="form-check-label" for="breakfast">Termasuk Breakfast</label>
                 </div>

                    <button type="submit" class="btn btn-success">Perbarui</button>
                </form>
            </section>

            <!-- Script JavaScript Bootstrap dan jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
        </html>
        <?php
    } else {
        echo "Pesanan tidak ditemukan.";
    }

    $conn->close();
}
?>