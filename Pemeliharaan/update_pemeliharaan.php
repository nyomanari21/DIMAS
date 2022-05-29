<?php

include("config.php");
include("Functions/function_barang.php");
include("Functions/function_ruangan.php");
include("Functions/function_kondisi.php");
include("Functions/function_sumber.php");
include("Functions/function_pemeliharaan.php");

/* if(! isset($_SESSION['identifier']))
{
    header("location:login.php");
} */

if(isset($_POST["update"]))
{
    if(update_pemeliharaan($_POST) > 0 ) 
    {
        echo "
            <script>
                alert('Data pemeliharaan berhasil diubah!');
                window.location.href = 'pemeliharaan.php'
            </script>
        ";
    } 
    else
    {
        echo "
            <script>
                alert('Data pemeliharaan gagal diubah!');
                window.location.href = 'pemeliharaan.php'
            </script>
        ";
    }
}

$kode = $_GET["kode_barang"];

$data = select_barang($kode);

// ambil data ruangan
$data_ruangan = show_ruangan();

// ambil data kondisi
$data_kondisi = show_kondisi();

// ambil data sumber
$data_sumber = show_sumber();

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
    <title>Edit Data</title>
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

    <!-- Form Ruangan -->
    <section>
        <div class="container my-4">
            <form class="row" method="post" action="update_pemeliharaan.php">
                <div class=" col-lg-6">
                    <!-- Kode Barang Read Only -->
                    <div class="mb-3">
                        <label for="kode_barang_ro" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" name="kode_barang_ro"
                            value="<?php echo $data[0]['kd_barang'] ?>" readonly>
                    </div>
                    <!-- Kode Barang Hidden -->
                    <input type="hidden" class="form-control" name="kode_barang"
                        value="<?php echo $data[0]['kd_barang'] ?>" readonly>
                    <!-- Nama Barang -->
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang"
                            value="<?php echo $data[0]['nama_barang'] ?>" required>
                    </div>
                    <!-- Kuantitas -->
                    <div class="mb-3">
                        <label for="kuantitas" class="form-label">Kuantitas</label>
                        <input type="text" class="form-control" name="kuantitas"
                            value="<?php echo $data[0]['kuantitas'] ?>" required>
                    </div>
                    <!-- kode ruangan -->
                    <div class="mb-3">
                        <label for="ruangan">Nama Ruangan</label>
                        <select class="form-select" name="ruangan" aria-label="Default select example">
                            <?php
                                foreach ($data_ruangan as $row)
                                {
                                    echo "<option value='{$row['kd_ruangan']}'>{$row['nama_ruangan']}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <!-- Kondisi -->
                    <div class="mb-3">
                        <label for="kondisi">Kondisi</label>
                        <select class="form-select" name="kondisi" aria-label="Default select example">
                            <?php
                                foreach ($data_kondisi as $row)
                                {
                                    echo "<option value='{$row['kd_kondisi']}'>{$row['nama_kondisi']}</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <!-- Masa pakai -->
                    <div class="mb-3">
                        <label for="masa_pakai" class="form-label">Masa Pakai</label>
                        <input type="number" class="form-control" name="lifetime" min='1'
                            value="<?php echo $data[0]['lifetime'] ?>" required />
                    </div>
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" name="update" class="btn btn-primary text-white">Update
                                Barang</button>
                        </div>
                        <div class="col-2">
                            <a class='btn text-white btn-danger' href='pemeliharaan.php'>Batalkan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>