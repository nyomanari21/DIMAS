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

// fungsi mengubah satus pengurus menjadi jamaah
function status_pengurus($kode)
{
    global $koneksi;

    // ambil data pengurus
    $sql = "SELECT * FROM pengurus WHERE username_pengurus = '$kode'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    $username = $data['username_pengurus'];
    $nama = $data['nama_pengurus'];
    $password = $data['password_pengurus'];

    // tambahkan ke jamaah
    $sql = "INSERT INTO jamaah VALUES('$username', '$nama', '$password')";
    $result = mysqli_query($koneksi, $sql);

    // hapus data pengurus yang telah dipindah
    $sql = "DELETE FROM pengurus WHERE username_pengurus = '$kode'";
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// fungsi menghapus data akun pengurus
function delete_pengurus($kode)
{
    global $koneksi;

    $sql = "DELETE FROM pengurus WHERE username_pengurus = '$kode'";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
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

// fungsi mengubah satus jamaah menjadi pengurus
function status_jamaah($kode)
{
    global $koneksi;

    // ambil data jamaah
    $sql = "SELECT * FROM jamaah WHERE username_jamaah = '$kode'";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);
    $username = $data['username_jamaah'];
    $nama = $data['nama_jamaah'];
    $password = $data['password_jamaah'];

    // tambahkan ke pengurus
    $sql = "INSERT INTO pengurus VALUES('$username', '$nama', '$password')";
    $result = mysqli_query($koneksi, $sql);

    // hapus data jamaah yang telah dipindah
    $sql = "DELETE FROM jamaah WHERE username_jamaah = '$kode'";
    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// fungsi menghapus data akun jamaah
function delete_jamaah($kode)
{
    global $koneksi;

    $sql = "DELETE FROM jamaah WHERE username_jamaah = '$kode'";

    $result = mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

?>