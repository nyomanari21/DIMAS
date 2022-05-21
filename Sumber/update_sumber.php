<?php

session_start();

include("config.php");
include("Functions/function_sumber.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

if(isset($_POST["submit"]))
{
    if(update_sumber($_POST) > 0 ) 
    {
        echo "
            <script>
                alert('Data sumber berhasil diubah!');
                window.location.href = 'input_sumber.php'
            </script>
        ";
    } 
    else
    {
        echo "
            <script>
                alert('Data sumber gagal diubah!');
                window.location.href = 'input_sumber.php'
            </script>
        ";
    }
}

$kode = $_GET["kode_sumber"];

$data = select_sumber($kode);

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
            <form class="row" method="post" action="update_sumber.php">
                <div class="col-lg-6">

                    <!-- Kode sumber Read Only-->
                    <div class="mb-3">
                        <label for="kode_sumber" class="form-label">Kode Sumber</label>
                        <input type="text" class="form-control" name="kode_sumber"
                            value="<?php echo $data[0]['kd_sumber'] ?>" readonly>
                    </div>
                    <!-- end of kode sumber -->

                    <!-- Nama Ruangan -->
                    <div class="mb-3">
                        <label for="nama_sumber" class="form-label">Nama Sumber</label>
                        <input type="text" class="form-control" name="nama_sumber"
                            value="<?php echo $data[0]['nama_sumber'] ?>">
                    </div>
                    <!-- end of  -->
                    <!-- Kode Ruangan Hidden -->
                    <input type="hidden" class="form-control" name="kode_sumber"
                        value="<?php echo $data[0]['kd_sumber'] ?>">
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary" name="submit">Update Sumber</button>
                        </div>
                        <div class="col-2">
                            <a class='btn text-white btn-danger btn-sm' href='input_sumber.php'>Batalkan</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>