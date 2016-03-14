<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];
// $cover = $_POST['cover'];

$query = "UPDATE buku 
    SET buku_judul = '$judul',
        kategori_id = $kategori,
        buku_deskripsi = '$deskripsi',
        buku_jumlah = $jumlah,
        buku_cover = null
    WHERE buku_id = $id_buku";

$hasil = mysqli_query($db, $query);
// var_dump(mysqli_error($db));
if ($hasil == true) {
    header('Location: list-buku.php');
} else {
    header('Location: tambah-buku.php');
}
