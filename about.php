<?php

session_start(); // Start session.
include("config.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Tentang Kami</title>
</head>

<body>
    <?php
        if($_SESSION['identifier'] == "admin")
        {
            include("Skin/navbar-admin.html"); 
        }
        else if($_SESSION['identifier'] == "pengurus")
        {
            include("Skin/navbar-moderator.html");
        }
        else
        {
            include("Skin/navbar-jamaah.html");
        }
    ?>

    <section>
        <div class="container my-5">
            <div class="row">
                <div class="container">
                    <h1 class="text-center">Tentang Kami</h1>
                </div>
                <div class="col p-3 text-center">
                    <img src="Assets/foto_masjid.jpeg" alt="" class="img m-5" width="50%">
                </div>    
                <p>
                    <!-- buat dimas -->
                    DIMAS atau Darussalam Invetory Management System merupakan sebuah website online yang digunakan
                    untuk sistem inventarisasi dan pemeliharan barang-barang yang terdapat pada Masjid Darussalam
                    Pondok Hijau. Website ini dirancang untuk mempermudah pengurus Masjid Darussalam dalam mengatur
                    pencatatan, pendataan hingga pemeliharaan barang-barang yang terdapat di dalam masjid, juga
                    untuk mempermudah jamaah mencari dan menggunakan barang-barang yang diperlukan. Website ini
                    dapat diakses oleh administrator, moderator dan jamaah dari Masjid Darussalam Pondok Hijau.
                </p>
                <p>
                    Masjid Darussalam Pondok Hijau merupakan masjid asri yang berada di tengah perumahan pondok
                    hijau. Masjid ini didirikan atas prakarsa mandiri warga Pondok Hijau Indah, Desa Ciwaruga,
                    Kecamatan Parongpong, Kabupaten Bandung Barat. Masjid Darussalam memiliki visi 3G: Green Dakwah,
                    Green Landscape, Green Energy. Masjid ini memiliki gaya bangunan arsitektur yang indah dan
                    mewah.
                </p>
                <p>
                    <h3>Visi</h3>
                    <p>Terciptanya Masyarakat yang Rukun, Damai, dan Tentram dalam Ridho Allah SWT.</p></br></br>
                    <h3>Misi</h3></br>
                    <ul>
                        <li>Terpenuhinya sarana dan prasarana ibadah yang representatif bagi umat.</li>
                        <li>Terpenuhinya sarana dan prasarana pendidikan Islam yang lengkap mulai dari pendidikan bagi anak, remaja, dan orang tua.</li>
                        <li>Terpublikasikannya hasil kajian ke-Islaman pada khalayak masyarakat sebagai bagian dari syiar dan dakwah islam.</li>
                        <li>Terpenuhinya sarana dan prasarana pengembangan ekonomi syariah sebagai bagian dari kemandirian umat.</li>
                    </ul>
                </p>
                <p>
                    Alamat</br>
                    Masjid ini berada di Pondok Hijau, Blk. G No.61, Ciwaruga, Parongpong, Kabupaten Bandung Barat,
                    Jawa Barat 40559
                </p>
            </div>
        </div>
    </section>
</body>

</html>