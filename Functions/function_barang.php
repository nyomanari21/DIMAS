<?php

session_start(); // Start session.
// include("config.php");

// fungsi menampilkan data barang
function show_barang()
{
    global $koneksi;

    $sql = "SELECT barang.kd_barang, barang.nama_barang, barang.kuantitas, ruangan.nama_ruangan, kondisi.nama_kondisi, log_barang.tanggal_input
    FROM barang JOIN ruangan ON barang.kd_ruangan = ruangan.kd_ruangan
    JOIN kondisi ON barang.kd_kondisi = kondisi.kd_kondisi
    JOIN log_barang ON barang.kd_barang = log_barang.kd_barang
    WHERE log_barang.status = 'Entri' ORDER BY barang.kd_barang";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

// fungksi mengambil data barang berdasarkan kode barang
function select_barang($kode)
{
    global $koneksi;

    $sql = "SELECT barang.kd_barang, barang.nama_barang, barang.kuantitas, ruangan.nama_ruangan, kondisi.nama_kondisi, log_barang.tanggal_input, barang.lifetime
    FROM barang JOIN ruangan ON barang.kd_ruangan = ruangan.kd_ruangan
    JOIN kondisi ON barang.kd_kondisi = kondisi.kd_kondisi
    JOIN log_barang ON barang.kd_barang = log_barang.kd_barang
    WHERE barang.kd_barang = '$kode'";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// function menambahkan data barang
function add_barang($data)
{
    global $koneksi;
    date_default_timezone_set("Asia/Jakarta");

    $username = $_SESSION['username'];
    $kode_barang = $data['kode_barang'];
    $nama_barang = $data['nama_barang'];
    $kuantitas = $data['kuantitas'];
    $ruangan = $data['ruangan'];
    $kondisi = $data['kondisi'];
    $sumber = $data['sumber'];
    $tanggal_input = date("Ymd");
    $lifetime = $data['masa_pakai'];
    $pengingat = $data['pengingat'];

    // tambah data barang
    $sql = "INSERT INTO barang VALUES('$kode_barang', '$nama_barang', '$kuantitas', '$lifetime', '$kondisi', '$ruangan')";
    $result = mysqli_query($koneksi, $sql);

    // tambah data log barang
    $sql = "INSERT INTO log_barang VALUES('', '$username', '$kode_barang', '$tanggal_input', 'Entri')";
    $result = mysqli_query($koneksi, $sql);

    // tambah data sumber barang
    $sql = "INSERT INTO sumber_barang VALUES('', '$sumber', '$kode_barang')";
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// function menghapus data barang
function delete_barang($kode)
{
    global $koneksi;
    date_default_timezone_set("Asia/Jakarta");
    $tanggal_input = date("Ymd");
    $username = $_SESSION['username'];

    $sql = "DELETE FROM barang WHERE kd_barang = '$kode'";
    $result = mysqli_query($koneksi, $sql);

    $sql = "INSERT INTO log_barang VALUES('$username', '$kode', '$tanggal_input', 'Hapus')";
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

function update_barang($data)
{
    global $koneksi;

    $username = $_SESSION['username'];
    $kode_barang = $data['kode_barang'];
    $nama_barang = $data['nama_barang'];
    $kuantitas = $data['kuantitas'];
    $ruangan = $data['ruangan'];
    $kondisi = $data['kondisi'];
    $sumber = $data['sumber'];
    $tanggal_input = date("Ymd");
    $lifetime = $data['masa_pakai'];
    $pengingat = $data['pengingat'];

    $sql = "INSERT INTO log_barang VALUES('$username', '$kode_barang', '$tanggal_input', 'Update')";
    $result = mysqli_query($koneksi, $sql);

    $sql = "UPDATE barang SET
            nama_barang = '$nama_barang', 
            kuantitas = '$kuantitas',
            kd_ruangan = '$ruangan',
            kd_kondisi = '$kondisi',
            lifetime = '$lifetime'
            WHERE kd_barang = '$kode_barang'";

    $result = mysqli_query($koneksi, $sql);
    
    return mysqli_affected_rows($koneksi);
}

?>