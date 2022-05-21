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

?>