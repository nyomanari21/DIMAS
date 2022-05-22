<?php

session_start();

include("config.php");
include("Functions/function_kondisi.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

if(isset($_POST["submit"]))
{
    if(update_kondisi($_POST) > 0 ) 
    {
        echo "
            <script>
                alert('Data kondisi berhasil diubah!');
                window.location.href = 'input_kondisi.php'
            </script>
        ";
    } 
    else
    {
        echo "
            <script>
                alert('Data kondisi gagal diubah!');
                window.location.href = 'input_kondisi.php'
            </script>
        ";
    }
}

$kode = $_GET["kode_kondisi"];

$data = select_kondisi($kode);

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
    <title>Sumber</title>
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
            <form class="row" method="post" action="update_kondisi.php">
                <div class="col-lg-6">

                    <!-- Kode kondisi Read Only-->
                    <div class="mb-3">
                        <label for="kode_kondisi" class="form-label">Kode Kondisi</label>
                        <input type="text" class="form-control" name="kode_kondisi"
                            value="<?php echo $data[0]['kd_kondisi'] ?>" readonly>
                    </div>
                    <!-- end of kode kondisi -->

                    <!-- Nama Ruangan -->
                    <div class="mb-3">
                        <label for="nama_kondisi" class="form-label">Nama Kondisi</label>
                        <input type="text" class="form-control" name="nama_kondisi"
                            value="<?php echo $data[0]['nama_kondisi'] ?>" required>
                    </div>
                    <!-- end of  -->
                    <!-- Kode Ruangan Hidden -->
                    <input type="hidden" class="form-control" name="kode_kondisi"
                        value="<?php echo $data[0]['kd_kondisi'] ?>">
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary text-white" name="submit">Update Kondisi</button>
                        </div>
                        <div class="col-2">
                            <a class='btn text-white btn-danger' href='input_kondisi.php'>Batalkan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>