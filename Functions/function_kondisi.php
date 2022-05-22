<?php

// include("config.php");

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


function select_kondisi($kode)
{
    global $koneksi;

    $sql = "SELECT * FROM kondisi WHERE kd_kondisi = '$kode'";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function add_kondisi($data)
{
    global $koneksi;

    // ambil data kondisi
    $kode = $data['kode_kondisi'];
    $nama = $data['nama_kondisi'];

    $sql = "INSERT INTO kondisi VALUES('$kode', '$nama')";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function delete_kondisi($kode)
{
    global $koneksi;

    $sql = "DELETE FROM kondisi WHERE kd_kondisi = '$kode'";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// fungsi mengupdate data kondisi
function update_kondisi($data)
{
    global $koneksi;

    // ambil data kondisi
    $kode = $data['kode_kondisi'];
    $nama = $data['nama_kondisi'];

    // query sql
    $query = "UPDATE kondisi SET 
            nama_kondisi='$nama' 
            WHERE kd_kondisi = '$kode'";

    // hasil query
    $result = mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}



?>