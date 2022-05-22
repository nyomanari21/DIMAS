<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_ruangan.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_ruangan = show_ruangan();

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
    <title>Ruangan</title>
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
        <div class="text-center mt-5">
            <h2>Input Ruangan</h2>
        </div>
    </section>

    <!-- Form Ruangan -->
    <section>
        <div class="container my-4">
            <form class="row" method="post" action="Ruangan/add_ruangan.php">
                <div class="col-lg-6">
                    <!-- Kode Ruangan -->
                    <div class="mb-3">
                        <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
                        <input type="text" class="form-control" name="kode_ruangan" required>
                    </div>
                    <!-- Nama Ruangan -->
                    <div class="mb-3">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary text-white" name="input">Input Ruangan</button>
                        </div>
                        <div class="col-2">
                            <button type="reset" class="btn btn-danger text-white">Batalkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Tabel Ruangan -->
    <section>
        <div class="container">
            <!-- Isi tabel -->
            <table class="border border-5 border-primary table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Kode Ruangan</th>
                        <th>Nama Ruangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <?php
                        foreach ($data_ruangan as $row)
                        {
                            echo "<tr>
                                    <td> {$row['kd_ruangan']} </td>
                                    <td> {$row['nama_ruangan']} </td>
                                    <td>
                                        <a class='btn text-white btn-primary btn-sm' href='update_ruangan.php?kode_ruangan={$row['kd_ruangan']}'>Edit</a>
                                        <a class='btn text-white btn-danger btn-sm' href='Ruangan/delete_ruangan.php?kode_ruangan={$row['kd_ruangan']}'>Hapus</a>
                                    </td>
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