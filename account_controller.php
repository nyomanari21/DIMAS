<?php

session_start(); // Start session.
include("config.php");

// fungsi login
if (isset($_POST['login'])) {
  // Simpan data form register.
  $nama = $_POST['username'];
  $password = $_POST['password'];
  $password_md5 = md5($password);

  // Opsi 1.
  $sql = "SELECT * FROM pengurus WHERE username_pengurus = '$nama' AND password_pengurus = '$password_md5'";
  $pengurus = mysqli_query($koneksi, $sql);

  // Jika username itu pengurus.
  if (mysqli_num_rows($pengurus) == 1) {
    $data = mysqli_fetch_assoc($pengurus);

    // Jika data admin ditemukan.
    if ($data['username_pengurus'] == "admin") {
      setcookie('message', 'admin', time() + 60);           // Set cookie admin.
      $_SESSION['username'] = $data['username_pengurus']; // Set session username admin.
      $_SESSION['nama'] = $data['nama_pengurus'];         // Set nama admin
      $_SESSION['identifier'] = "admin";                  // Set session identifier admin.
      header("location:index.php");                       // Redirect ke halaman index.php.
    }
    // Jika data pengurus ditemukan.
    else {
      setcookie('message', 'pengurus', time() + 60);        // Set cookie jamaah.
      $_SESSION['username'] = $data['username_pengurus']; // Set session username pengurus.
      $_SESSION['nama'] = $data['nama_pengurus'];         // Session nama jamaah.
      $_SESSION['identifier'] = "pengurus";              // Set session identifier pengurus.
      header("location:index.php");                       // Redirect ke halaman index.php.
    }
  } else {
    // Ambil data jamaah.
    $sql = "SELECT * FROM jamaah WHERE username_jamaah = '$nama' AND password_jamaah = '$password_md5'";
    $jamaah = mysqli_query($koneksi, $sql);

    // Jika data akun jamaah ditemukan.
    if (mysqli_num_rows($jamaah) == 1) {
      $data = mysqli_fetch_assoc($jamaah);
      setcookie('message', 'pengurus', time() + 60);      // Set cookie jamaah.
      $_SESSION['username'] = $data['username_jamaah']; // Set session username jamaah.
      $_SESSION['nama'] = $data['nama_jamaah'];         // Session nama jamaah.
      $_SESSION['identifier'] = "jamaah";               // Set session identifier jamaah.
      header("location:index.php");                     // Redirect ke halaman index.php.
    }
    // Jika tidak ada akun yang ditemukan.
    else {
      setcookie('message', 'Username atau Password Salah.', time() + 60);
      header("location:login.php");
    }
  }

  // query tambah data jamaah
  $sql = "INSERT INTO jamaah VALUES ('$email', '$nama', '$password_md5')";
  $result = mysqli_query($koneksi, $sql);

  if (!$result) {
    die('Could not insert data: ' . mysqli_error($koneksi));
  } else {
    setcookie("message", "Akun berhasil dibuat", time() + 60);
  }
  header("location:login.php");
}

// fungsi logout
if (isset($_POST['logout'])) {
  session_unset();
  session_destroy(); // Hapus semua session
  header("location: login.php"); // Redirect ke halaman login.php
}

// fungsi tambah akun
if (isset($_POST['register'])) {
  //simpan data form register
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password_md5 = md5($_POST['password']);

  // query tambah data jamaah
  $sql = "INSERT INTO jamaah VALUES ('$username', '$nama', '$password_md5')";
  $result = mysqli_query($koneksi, $sql);

  if (!$result) {
    die('Could not insert data: ' . mysqli_error($koneksi));
  } else {
    echo "<script>" . "alert('Registrasi berhasil! Silakan login untuk melanjutkan.');" .
      "window.location.href = 'login.php'" . "</script>";
  }
}
