<?php

// include("config.php");

// fungsi menampilkan data log barang
function show_log_barang()
{
    global $koneksi;

    $sql = "SELECT username_pengurus, kd_barang, tanggal_input, status FROM log_barang";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function search_log()
{
    global $koneksi;

    $keyword = "";
    if(isset($_POST['keyword']))
    {
        $keyword = $_POST['keyword'];
    }

    $search_log = '%' . $keyword . "%";
    $query = "SELECT id_log_barang, username_pengurus, kd_barang, tanggal_input, status FROM log_barang
              WHERE (username_pengurus LIKE '$search_log' OR kd_barang LIKE '$search_log'
              OR tanggal_input LIKE '$search_log' OR status LIKE '$search_log')
              ORDER BY id_log_barang DESC";

    $result = mysqli_query($koneksi, $query);
    
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    return $data;
}

?>