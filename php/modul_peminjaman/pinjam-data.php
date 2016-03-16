<?php
// ... ambil data dari database
include 'proses-list-pinjam-data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peminjaman</title>
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
            <h1>Daftar Peminjaman</h1>
            <div class="btn-tambah-div">
                <a href="pinjam-form.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_pinjam)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Buku</th>
                    <th>Nama</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_pinjam as $pinjam) : ?>
                <tr>
                    <td><?php echo $pinjam['buku_judul'] ?></td>
                    <td><?php echo $pinjam['anggota_nama'] ?></td>
                    <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_pinjam'])) ?></td>
                    <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_jatuh_tempo'])) ?></td>
                    <td>
                    <?php  
                        if (empty($pinjam['tgl_kembali'])) {
                            echo "-";
                        } 
                        else {
                            echo date('d-m-Y', strtotime($pinjam['tgl_kembali']));
                        }
                    ?>
                    </td>
                    <td>
                        <?php if (empty($pinjam['tgl_kembali'])): ?>
                            <a href="kembali_form.html" class="link" title="klik untuk proses pengembalian">pinjam</a>
                        <?php else: ?>
                            kembali  
                        <?php endif ?>
                    </td>
                    <td>
                        <a href="edit-pinjam.php?id_pinjam=<?php echo $pinjam['pinjam_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="proses-delete-pinjam.php?id_pinjam=<?php echo $pinjam['pinjam_id']; ?>"  onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>