<?php

include("config.php");

// fungsi menampilkan data kondisi
function show_kondisi()
{
    global $koneksi;

    // query sql
    $sql = "SELECT * FROM kondisi";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

?>