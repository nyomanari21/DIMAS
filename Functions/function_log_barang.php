<?php

include("config.php");

// fungsi menampilkan data log barang
function show_log_barang()
{
    global $koneksi;

    // query sql
    $sql = "SELECT log_barang.username_pengurus, log_barang.kd_barang, barang.nama_barang, log_barang.tanggal_input, log_barang.status
    FROM log_barang JOIN barang ON log_barang.kd_barang = barang.kd_barang";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}



?>