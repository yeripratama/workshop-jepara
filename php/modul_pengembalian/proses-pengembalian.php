<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$tgl_kembali = $_POST['tgl_kembali'];
$denda = $_POST['denda'];
$pinjam_id = $_POST['pinjam_id'];

$query = "INSERT INTO kembali (pinjam_id, tgl_kembali, denda) 
    VALUES ($pinjam_id, '$tgl_kembali', $denda)";

$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    // ambil buku_id berdasarkan pinjam_id
    $q = "SELECT buku.buku_id FROM buku JOIN pinjam WHERE buku.buku_id = pinjam.buku_id";
    $hasil = mysqli_query($db, $q);
    $hasil = mysqli_fetch_assoc($hasil);
    $buku_id = $hasil['buku_id'];

    $q = "UPDATE buku SET buku_jumlah = buku_jumlah + 1 WHERE buku_id = $buku_id";
    $update_jumlah = mysqli_query($db, $q);

    header('Location: ../modul_peminjaman/pinjam-data.php');
} else {
    header('Location: pengembalian.php?id_pinjam='. $pinjam_id);
}

