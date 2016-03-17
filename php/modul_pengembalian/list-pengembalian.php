<?php
include 'proses-list-pengembalian.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengembalian</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>

        <div class="sidebar">
            <ul>
                <li><a href="pinjam_data.html">Peminjaman</a></li>
                <li><a class="active" href="kembail_data.html">Pengembalian</a></li>
                <li><a href="kategori_data.html">Data Kategori</a></li>
                <li><a href="buku_data.html">Data Buku</a></li>
                <li><a href="anggota_data.html">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="#" onclick="return confirm('anda yakin akan keluar?')">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Daftar Pengembalian</h1>
            <table class="data">
                <tr>
                    <th>Buku</th>
                    <th>Nama</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th>
                    <th width="20%">Pilihan</th>
                </tr>

                <?php foreach ($data_kembali as $kembali) : ?>
                <tr>
                    <td><?php echo $kembali['buku_judul'] ?></td>
                    <td><?php echo $kembali['anggota_nama'] ?></td>
                    <td><?php echo $kembali['tgl_pinjam'] ?></td>
                    <td><?php echo $kembali['tgl_jatuh_tempo'] ?></td>
                    <td><?php echo $kembali['tgl_kembali'] ?></td>
                    <td>
                    <a href="delete-pengembalian.php?id_kembali=<?php echo $kembali['kembali_id'] ?>" onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>

            </table>
        </div>

    </div>
</body>
</html>

