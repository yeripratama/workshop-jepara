<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO buku (buku_judul, kategori_id, buku_deskripsi, buku_jumlah, buku_cover) 
    VALUES ('$judul', $kategori, '$deskripsi', $jumlah, null)";
$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: list-buku.php');
} else {
    header('Location: tambah-buku.php');
}
