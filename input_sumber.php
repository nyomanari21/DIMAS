<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_sumber.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_sumber = show_sumber();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
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

    <!-- Form Sumber -->
    <section>
        <div class="container my-4">
            <form class="row" method="post" action="">
                <div class="col-lg-6">
                    <!-- Kode Sumber -->
                    <div class="mb-3">
                        <label for="kode_sumber" class="form-label">Kode Sumber</label>
                        <input type="text" class="form-control" nama="kode_sumber">
                    </div>
                    <!-- Sumber -->
                    <div class="mb-3">
                        <label for="sumber" class="form-label">Sumber</label>
                        <input type="text" class="form-control" nama="sumber">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Input Sumber</button>
                        </div>
                        <div class="col-2">
                            <button type="reset" class="btn btn-danger">Batalkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Tabel Sumber -->
    <section>
        <div class="container">
            <!-- Isi tabel -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Sumber</th>
                        <th>Nama Sumber</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data_sumber as $row)
                        {
                            echo "<tr>
                                    <td> {$row['kd_sumber']} </td>
                                    <td> {$row['nama_sumber']} </td>
                                </tr>";
                        }

                        mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>