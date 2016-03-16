<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$buku     			= $_POST['buku'];
$anggota  			= $_POST['anggota'];
$tgl_pinjam 		= date('Y-m-d',strtotime($_POST['tgl_pinjam']));
$tgl_jatuh_tempo    = date('Y-m-d',strtotime($_POST['tgl_jatuh_tempo']));

$query = "INSERT INTO pinjam (buku_id, anggota_id, tgl_pinjam, tgl_jatuh_tempo) 
    VALUES ('$buku', $anggota, '$tgl_pinjam', '$tgl_jatuh_tempo')";
$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: pinjam-data.php');
} else {
    header('Location: pinjam-form.php');
}
