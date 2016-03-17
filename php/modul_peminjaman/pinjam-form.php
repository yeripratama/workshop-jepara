<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

// ... ambil data dari database
include '../modul_buku/proses-list-buku.php';

// ... ambil data dari database
include '../modul_anggota/proses-list-anggota.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>

         <div class="sidebar">
            <ul>
                <li><a href="modul_kategori/list-kategori.php">Data Kategori</a></li>
                <li><a href="modul_buku/list-buku.php">Data Buku</a></li>
                <li><a href="anggota_data.html">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="modul_peminjaman/pinjam-data.php">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h3>Transaksi Peminjaman</h3>
            <form action="proses-tambah-pinjam.php" method="post">
                <p>Buku</p>
                <p>
                    <select name="buku">
                        <?php foreach ($data_buku as $buku): ?>
                            <option value="<?php echo $buku['buku_id'] ?>"><?php echo $buku['buku_judul'] ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Anggota</p>
                <p>
                    <select name="anggota">
                        <?php foreach ($data_anggota as $anggota) : ?>
                        <option value="<?php echo $anggota['anggota_id'] ?>"><?php echo $anggota['anggota_nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Tanggal Pinjam</p>
                <p><input type="date" name="tgl_pinjam"></p>

                <p>Tanggal Jatuh Tempo</p>
                <p><input type="date" name="tgl_jatuh_tempo"></p>

                <p><input type="submit" class="btn btn-submit" value="Simpan"></p>
            </form>
        </div>

    </div>
</body>
</html>
