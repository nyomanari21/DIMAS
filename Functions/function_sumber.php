<?php

include("config.php");

// fungsi menampilkan data sumber
function show_sumber()
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM sumber";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function add_sumber($data)
{
    global $koneksi;

    $kode = $data['kd_sumber'];
    $nama = $data['nama_sumber'];

    $sql = "INSERT INTO sumber VALUES($kode, $nama)";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function delete_sumber($kode)
{
    global $koneksi;
       
    mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE kd_sumber = $kode");

    return mysqli_affected_rows($koneksi);
}


?>