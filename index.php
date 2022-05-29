<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_pemeliharaan.php");

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
    <title>Home</title>
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
                <div class="col my-5 p-5 text-center">
                    <img src="Assets/logo_darussalam_nav.png" alt="" class="img ms-5 mt-5 me-5 mb-2 " width="25%">
                    <h4 class="mb-5">Selamat Datang, <?php echo $_SESSION['nama'] ?>!</h4>
                    <p>
                        DIMAS</br>
                        Darussalam Invetory Management System
                    </p>
                </div>
            </div>
        </div>

        <div class="position-absolute top-50 end-0 translate-middle-y mx-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header bg-primary text-center">
                    <h4 class="fw-2 text-white">Notifikasi Pemeliharaan</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Masa Pakai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $data_pemeliharaan = search_pemeliharaan();
                                
                                foreach ($data_pemeliharaan as $row)
                                {
                                    if($row['lifetime'] <= 7){
                                        echo "<tr>
                                                <td> {$row['nama_barang']} </td>
                                                <td> {$row['lifetime']} Hari</td>
                                            </tr>";
                                    }
                                }

                                mysqli_close($koneksi);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </section>

</body>

</html>