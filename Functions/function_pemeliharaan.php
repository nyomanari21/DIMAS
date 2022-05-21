<?php

include("config.php");

// fungsi menampilkan data pemeliharaan
function show_pemeliharaan()
{
    global $koneksi;

    // query sql
    $sql = "SELECT barang.kd_barang, barang.nama_barang, barang.kuantitas, ruangan.kd_ruangan, ruangan.nama_ruangan, kondisi.nama_kondisi, barang.lifetime
            FROM barang JOIN ruangan ON barang.kd_ruangan = ruangan.kd_ruangan
            JOIN kondisi ON barang.kd_kondisi = kondisi.kd_kondisi";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

?>