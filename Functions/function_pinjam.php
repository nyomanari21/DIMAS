<?php

session_start(); // Start session.
// include("config.php");

// fungsi menampilkan data peminjaman
function show_peminjaman()
{
    global $koneksi;

    $username = $_SESSION['username'];

    $sql = "SELECT peminjaman.id_peminjaman, peminjaman.username_jamaah, peminjaman.kd_barang, barang.nama_barang, peminjaman.tanggal_peminjaman,
            peminjaman.tanggal_pengembalian, peminjaman.status_peminjaman
            FROM peminjaman JOIN barang ON peminjaman.kd_barang = barang.kd_barang
            WHERE peminjaman.username_jamaah = '$username'";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

function select_pinjam($kode)
{
    global $koneksi;

    $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = '$kode'";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// fungsi supaya admin bisa melihat data barang yang dipinjam
function lihat_peminjaman()
{
    global $koneksi;

    $sql = "SELECT peminjaman.id_peminjaman, peminjaman.username_jamaah, peminjaman.kd_barang, barang.nama_barang, peminjaman.tanggal_peminjaman,
            peminjaman.tanggal_pengembalian, peminjaman.status_peminjaman
            FROM peminjaman JOIN barang ON peminjaman.kd_barang = barang.kd_barang";

    $result = mysqli_query($koneksi, $sql);
    $data = [];

    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

// fungsi menambah data pinjaman barang
function add_peminjaman($kode)
{
    global $koneksi;
    date_default_timezone_set("Asia/Jakarta");
    
    $username = $_SESSION['username'];
    $tanggal_peminjaman = date("Ymdhis");
    $kode_barang = $kode;
    
    $sql = "INSERT INTO peminjaman (username_jamaah, kd_barang, tanggal_peminjaman, status_peminjaman) VALUES('$username', '$kode_barang', '$tanggal_peminjaman', 'Belum Dikembalikan')";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}


// fungsi mengubah status peminjaman
function update_peminjaman($kode)
{
    global $koneksi;
    date_default_timezone_set("Asia/Jakarta");
    $tanggal_pengembalian = date("Ymdhis");

    $sql = "UPDATE peminjaman SET status_peminjaman='Sudah Dikembalikan',
            tanggal_pengembalian='$tanggal_pengembalian'
            WHERE id_peminjaman = '$kode'";
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// fungsi menghapus data peminjaman
function hapus_peminjaman($kode)
{
    global $koneksi;

    $sql = "DELETE FROM peminjaman WHERE id_peminjaman = '$kode'";
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}


?>