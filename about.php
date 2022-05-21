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
        <div class="container">
            <div class="row">
                <div class="col my-5 p-3 text-center">
                    <img src="Assets/foto_masjid.jpeg" alt="" class="img m-5" width="50%">
                    <p class="justify-content">
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
                        Alamat</br>
                        Masjid ini berada di Pondok Hijau, Blk. G No.61, Ciwaruga, Parongpong, Kabupaten Bandung Barat,
                        Jawa Barat 40559
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>