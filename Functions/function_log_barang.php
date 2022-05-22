<?php

include("config.php");

// fungsi menampilkan data log barang
function show_log_barang()
{
    global $koneksi;

    // query sql
    $sql = "SELECT log_barang.username_pengurus, log_barang.kd_barang, barang.nama_barang, log_barang.tanggal_input
    FROM log_barang JOIN barang ON log_barang.kd_barang = barang.kd_barang";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function add_log($data)
{
    global $koneksi;

    $kode = $data['kode_sumber'];
    $nama = $data['nama_sumber'];



}

?>