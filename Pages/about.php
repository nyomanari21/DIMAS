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
    <section class="bg-image" style="background-image: url('Assets/foto_masjid.jpeg');
            height: 400px;
            background-position: 50% 65%;
            background-repeat: no-repeat;
            background-size: cover;">
    </section>

    <section>
        <div class="container my-5">
            <div class="row">
                <div class="container">
                    <h1 class="fw-bold">Tentang Kami</h1>
                </div>
                <p>
                    <!-- buat dimas -->
                    DIMAS atau Darussalam Inventory Management System merupakan sebuah website online yang digunakan
                    untuk sistem inventarisasi dan pemeliharaan barang-barang yang terdapat pada Masjid Darussalam
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
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container my-5 py-5">
            <h2 class="text-info fw-bold">Visi</h2>
            <p>Terciptanya Masyarakat yang Rukun, Damai, dan Tentram dalam Ridho Allah SWT.</p></br>


            <h2 class="text-info fw-bold">Misi</h2>
            <ul>
                <li>Terpenuhinya sarana dan prasarana ibadah yang representatif bagi umat.</li>
                <li>Terpenuhinya sarana dan prasarana pendidikan Islam yang lengkap mulai dari pendidikan bagi anak,
                    remaja, dan orang tua.</li>
                <li>Terpublikasikannya hasil kajian ke-Islaman pada khalayak masyarakat sebagai bagian dari syiar dan
                    dakwah islam.</li>
                <li>Terpenuhinya sarana dan prasarana pengembangan ekonomi syariah sebagai bagian dari kemandirian umat.
                </li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <h2>Alamat</h2>
            <p>Pondok Hijau, Blk. G No.61, Ciwaruga, Parongpong, Kabupaten Bandung Barat, Jawa Barat
                40559</p>
            <div id="map-container-google-1" class="embed-responsive z-depth-1-half map-container"
                style="height: 500px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d513.3365163083115!2d107.58293221861123!3d-6.858541785709751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ce3f58e5b3%3A0xc9f61a0ea5412f89!2sMasjid%20Darussalam%20Pondok%20Hijau!5e0!3m2!1sen!2sus!4v1653816394335!5m2!1sen!2sus"
                    class="embed-responsive-item w-100 h-75" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

</body>

</html>