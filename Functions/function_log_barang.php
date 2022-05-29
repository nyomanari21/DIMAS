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

function search_log()
{
    global $koneksi;

    $keyword = "";
    if(isset($_POST['keyword']))
    {
        $keyword = $_POST['keyword'];
    }

    $search_log = '%' . $keyword . "%";
    $query = "SELECT log_barang.username_pengurus, log_barang.kd_barang, barang.nama_barang,
              log_barang.tanggal_input, log_barang.status FROM log_barang JOIN barang ON
              log_barang.kd_barang = barang.kd_barang WHERE (log_barang.username_pengurus
              LIKE '$search_log' OR log_barang.kd_barang LIKE '$search_log' OR barang.nama_barang
              LIKE '$search_log' OR log_barang.tanggal_input LIKE '$search_log' OR
              log_barang.status LIKE '$search_log') ORDER BY log_barang.kd_barang";

    $result = mysqli_query($koneksi, $query);
    
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    return $data;
}

?>