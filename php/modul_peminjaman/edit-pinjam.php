<?php
// ... ambil data dari database
include '../modul_buku/proses-list-buku.php';

// ... ambil data dari database
include '../modul_anggota/proses-list-anggota.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

$id_pinjam = $_GET['id_pinjam'];
$query = "SELECT * FROM pinjam WHERE pinjam.pinjam_id = $id_pinjam";
$hasil = mysqli_query($db, $query);
$data_pinjam = mysqli_fetch_assoc($hasil);

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
            <h3>Tambah Data Peminjaman</h3>
            <form action="proses-edit-pinjam.php" method="post">
            <input type="hidden" name="pinjam_id" value="<?php echo $id_pinjam ?>">
                <p>Buku</p>
                <p>
                    <select name="buku">
                        <?php foreach ($data_buku as $buku): ?>
                            <option value="<?php echo $buku['buku_id'] ?>" <?php echo ($buku['buku_id'] == $data_pinjam['buku_id']) ? 'selected' : '' ; ?> ><?php echo $buku['buku_judul'] ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Anggota</p>
                <p>
                    <select name="anggota">
                        <?php foreach ($data_anggota as $anggota) : ?>
                        <option value="<?php echo $anggota['anggota_id'] ?>" <?php echo ($anggota['anggota_id'] == $data_pinjam['anggota_id']) ? 'selected' : '' ; ?> ><?php echo $anggota['anggota_nama'] ?></option>
                        <?php endforeach ?>
                    </select>
                </p>

                <p>Tanggal Pinjam</p>
                <p><input type="date" name="tgl_pinjam" value="<?php echo $data_pinjam['tgl_pinjam'] ?>"></p>

                <p>Tanggal Jatuh Tempo</p>
                <p><input type="date" name="tgl_jatuh_tempo" value="<?php echo $data_pinjam['tgl_jatuh_tempo'] ?>"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>