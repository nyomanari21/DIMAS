<?php

// fungsi menampilkan data akun pengurus
function show_pengurus()
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM pengurus";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// fungsi menampilkan data akun jamaah
function show_jamaah()
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM jamaah";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

?>