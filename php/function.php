<?php

function ambil_kategori($db)
{
    // ambil data kategori
    $query = "SELECT * FROM kategori";
    $hasil = mysqli_query($db, $query);
    $data_kategori = array();

    while ($row = mysqli_fetch_assoc($hasil)) {
        $data_kategori[] = $row;
    }

    return $data_kategori;
}

function hitung_denda($tgl_kembali, $tgl_jatuh_tempo) {
    if (strtotime( $tgl_kembali ) > strtotime($tgl_jatuh_tempo)) {
        $kembali = new DateTime($tgl_kembali); 
        $jatuh_tempo   = new DateTime($tgl_jatuh_tempo); 

        $selisih = $kembali->diff($jatuh_tempo);
        $selisih = $selisih->format('%d');

        $denda = 2000 * $selisih;
    } else {
        $denda = 0;
    }

    return $denda;
}
