<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';
include '../function.php';

$pinjam_id 			= $_POST['pinjam_id'];
$buku     			= $_POST['buku'];
$anggota  			= $_POST['anggota'];
$tgl_pinjam 		= date('Y-m-d',strtotime($_POST['tgl_pinjam']));
$tgl_jatuh_tempo    = date('Y-m-d',strtotime($_POST['tgl_jatuh_tempo']));

$stok = cek_stok($db, $buku);

if ($stok < 1) {
    header('Location: edit-pinjam.php?id_pinjam=' . $pinjam_id);
    exit();
}

$query = "UPDATE pinjam 
			SET 
				buku_id = '$buku', 
				anggota_id = '$anggota', 
				tgl_pinjam = '$tgl_pinjam', 
				tgl_jatuh_tempo = '$tgl_jatuh_tempo'
			WHERE
				pinjam_id = '$pinjam_id'";

$hasil = mysqli_query($db, $query);
if ($hasil == true) {

    kurangi_stok($db, $buku);

    header('Location: pinjam-data.php');
} else {
    header('Location: edit-pinjam.php');
}
