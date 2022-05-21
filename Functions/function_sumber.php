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

?>