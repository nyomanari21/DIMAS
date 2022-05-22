<?php

include("config.php");

function show_barang()
{
    global $koneksi;

    $sql = "SELECT barang.kd_barang, barang.nama_barang, barang.kuantitas, ruangan.nama_ruangan, kondisi.nama_kondisi, log_barang.tanggal_input
    FROM barang JOIN ruangan ON barang.kd_ruangan = ruangan.kd_ruangan
    JOIN kondisi ON barang.kd_kondisi = kondisi.kd_kondisi
    JOIN log_barang ON barang.kd_barang = log_barang.kd_barang";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function delete_barang($kode)
{
    global $koneksi;

    $sql = "DELETE FROM barang WHERE kd_barang = '$kode'";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);

}

?>