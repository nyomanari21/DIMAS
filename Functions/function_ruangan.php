<?php

include("config.php");

// fungsi menampilkan data ruangan
function show_ruangan()
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM ruangan";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// fungsi menambahkan data ruangan
function add_ruangan($data)
{
    global $koneksi;

    // menyimpan data dari form
    $kode = $data['kode_ruangan'];
    $nama = $data['nama_ruangan'];

    // query sql
    $sql = "INSERT INTO ruangan VALUES($kode, $nama)";

    // hasil query
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// fungsi menghapus data ruangan
function delete_ruangan($kode)
{
    global $koneksi;

    // query sql
    $sql = "DELETE FROM ruangan WHERE kd_ruangan = '$kode'";

    // hasil query
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

?>