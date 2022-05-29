<?php

session_start(); // Start session.
include("config.php");
include("Functions/function_kondisi.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

$data_kondisi = show_kondisi();

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
        <div class="text-center mt-5">
            <h2>Input Kondisi</h2>
        </div>
    </section>

    <!-- Form Kondisi -->
    <section>
        <div class="container my-4">
            <form class="row" method="post" action="Kondisi/add_kondisi.php">
                <div class="col-lg-6">
                    <!-- Kode Kondisi -->
                    <div class="mb-3">
                        <label for="kode_kondisi" class="form-label">Kode Kondisi</label>
                        <input type="text" class="form-control" name="kode_kondisi" required>
                    </div>
                    <!-- Nama Kondisi -->
                    <div class="mb-3">
                        <label for="nama_kondisi" class="form-label">Nama Kondisi</label>
                        <input type="text" class="form-control" name="nama_kondisi" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary text-white" name="input">Input Kondisi</button>
                        </div>
                        <div class="col-2">
                            <button type="reset" class="btn btn-danger text-white">Batalkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Tabel Kondisi -->
    <section>
        <div class="container">
            <!-- Isi tabel -->
            <table class="border border-5 border-primary table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Kode Kondisi</th>
                        <th>Nama Kondisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <?php
                        foreach ($data_kondisi as $row)
                        {
                            echo "<tr>
                                    <td> {$row['kd_kondisi']} </td>
                                    <td> {$row['nama_kondisi']} </td>
                                    <td>
                                        <a class='btn text-white btn-primary btn-sm' href='update_kondisi.php?kode_kondisi={$row['kd_kondisi']}'>Edit</a>
                                        <a class='btn text-white btn-danger btn-sm' href='Kondisi/delete_kondisi.php?kode_kondisi={$row['kd_kondisi']}'>Hapus</a>
                                    </td>
                                </tr>";
                        }

                        mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
            <a href="input_db.php">
                <button class="btn btn-primary text-white">Kembali</button>
            </a>
        </div>
    </section>

</body>

</html>