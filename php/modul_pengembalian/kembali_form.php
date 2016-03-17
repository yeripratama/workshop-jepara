<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>

         <div class="sidebar">
            <ul>
                <li><a class="active" href="pinjam_data.html">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="kategori_data.html">Data Kategori</a></li>
                <li><a href="buku_data.html">Data Buku</a></li>
                <li><a href="anggota_data.html">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="#" onclick="return confirm('anda yakin akan keluar?')">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h3>Tambah Data Peminjaman</h3>
            <form method="post">
                <p>Buku</p>
                <p>
                    <input type="text" value="HTML & CSS" disabled>
                </p>

                <p>Anggota</p>
                <p>
                    <input type="text" value="Jarjit Singh" disabled>
                </p>

                <p>Tanggal Pinjam</p>
                <p><input type="date" name="tgl_pinjam" value="2016-03-02" disabled></p>

                <p>Tanggal Jatuh Tempo</p>
                <p><input type="date" name="tgl_jatuh_tempo" value="2016-03-12" disabled></p>

                <p>Tanggal Kembali</p>
                <p><input type="date" name="tgl_kembali" value="2016-03-13"></p>

                <p>Denda</p>
                <p><input type="text" name="denda" value="200" disabled></p>

                <p><input type="submit" class="btn btn-submit" value="Simpan"></p>
            </form>
        </div>

    </div>
</body>
</html>