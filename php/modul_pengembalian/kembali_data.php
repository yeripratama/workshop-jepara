<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengembalian</title>
    <link rel="stylesheet" href="css/style.css">
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
            <div class="btn-tambah-div">
                <a href="kembali_form.html"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <table class="data">
                <tr>
                    <th>Buku</th>
                    <th>Nama</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th>
                    <th width="20%">Pilihan</th>
                </tr>

                <tr>
                    <td>HTML & CSS</td>
                    <td>jarjit</td>
                    <td>12-03-2016</td>
                    <td>14-03-2016</td>
                    <td>14-03-2016</td>
                    <td>
                        <a href="kembali_form.html" class="btn btn-edit">Edit</a>
                        <a href="#" onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>

                <tr>
                    <td>HTML & CSS</td>
                    <td>jarjit</td>
                    <td>12-03-2016</td>
                    <td>14-03-2016</td>
                    <td>14-03-2016</td>
                    <td>
                        <a href="kembali_form.html" class="btn btn-edit">Edit</a>
                        <a href="#" onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>

                <tr>
                    <td>HTML & CSS</td>
                    <td>jarjit</td>
                    <td>12-03-2016</td>
                    <td>14-03-2016</td>
                    <td>14-03-2016</td>
                    <td>
                        <a href="kembali_form.html" class="btn btn-edit">Edit</a>
                        <a href="#" onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>

                <tr>
                    <td>HTML & CSS</td>
                    <td>jarjit</td>
                    <td>12-03-2016</td>
                    <td>14-03-2016</td>
                    <td>14-03-2016</td>
                    <td>
                        <a href="kembali_form.html" class="btn btn-edit">Edit</a>
                        <a href="#" onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>

            </table>
        </div>

    </div>
</body>
</html>