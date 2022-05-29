<?php

// include("config.php");

// fungsi menampilkan data pemeliharaan
function show_pemeliharaan()
{
    global $koneksi;

    // query sql
    $sql = "SELECT barang.kd_barang, barang.nama_barang, barang.kuantitas, ruangan.kd_ruangan, ruangan.nama_ruangan, kondisi.nama_kondisi, barang.lifetime
    FROM barang JOIN ruangan ON barang.kd_ruangan = ruangan.kd_ruangan
    JOIN kondisi ON barang.kd_kondisi = kondisi.kd_kondisi";

    // hasil query
    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function search_pemeliharaan()
{
    global $koneksi;

    $keyword = "";
    if(isset($_POST['keyword']))
    {
        $keyword = $_POST['keyword'];
    }

    $search_maintenance = '%' . $keyword . "%";
    $query = "SELECT barang.kd_barang, barang.nama_barang, barang.kuantitas,
              ruangan.kd_ruangan, ruangan.nama_ruangan, kondisi.nama_kondisi,
              barang.lifetime FROM barang JOIN ruangan ON
              barang.kd_ruangan = ruangan.kd_ruangan JOIN kondisi ON
              barang.kd_kondisi = kondisi.kd_kondisi WHERE (barang.kd_barang LIKE '$search_maintenance'
              OR barang.nama_barang LIKE '$search_maintenance' OR barang.kuantitas LIKE
              '$search_maintenance' OR ruangan.kd_ruangan LIKE '$search_maintenance'
              OR ruangan.nama_ruangan LIKE '$search_maintenance' OR kondisi.nama_kondisi
              LIKE '$search_maintenance' OR barang.lifetime LIKE
              '$search_maintenance') ORDER BY kd_barang";

    $result = mysqli_query($koneksi, $query);
    
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    return $data;
}

function delete_pemeliharaan($kode)
{
    global $koneksi;

    $sql = "DELETE FROM barang WHERE kd_barang = '$kode'";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function update_pemeliharaan($data)
{
    global $koneksi;

    $kode = $data['kode_barang'];
    $nama = $data['nama_barang'];
    $kuantitas = $data['kuantitas'];
    $ruangan = $data['ruangan'];
    $kondisi = $data['kondisi'];
    $lifetime = $data['lifetime'];
    // query sql
    $query = "UPDATE barang SET 
            nama_barang='$nama',
            kuantitas='$kuantitas',
            kd_ruangan='$ruangan',
            kd_kondisi='$kondisi',
            lifetime='$lifetime'
            WHERE kd_barang = '$kode'";

    $result = mysqli_query($koneksi, $query);
    echo $query;

    return mysqli_affected_rows($koneksi);
}

?>