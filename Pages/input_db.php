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
    <title>Input Data</title>
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
        <div class="text-center my-5">
            <h2>Input Barang</h2>
        </div>
    </section>

    <section>
        <div class="container my-4">
            <form class="row" method="post" action="Barang/add_barang.php">
                <div class="col-lg-6">
                    <!-- Kode Barang -->
                    <div class="mb-3">
                        <label for="kode_barang" class="form-label">Kode Barang</label>
                        <input type="text" class="form-control" name="kode_barang" required>
                    </div>
                    <!-- Nama Barang -->
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" required>
                    </div>
                    <!-- Kuantitas -->
                    <div class="mb-3">
                        <label for="kuantitas" class="form-label">Kuantitas</label>
                        <input type="text" class="form-control" name="kuantitas" required>
                    </div>
                    <!-- Nama Ruangan -->
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
                    <!-- Sumber -->
                    <div class="mb-3">
                        <label for="sumber">Sumber</label>
                        <select class="form-select" name="sumber" aria-label="Default select example">
                            <?php
                                foreach ($data_sumber as $row)
                                {
                                    echo "<option value='{$row['kd_sumber']}'>{$row['nama_sumber']}</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Tanggal input -->
                    <div class="mb-3">
                        <label for="tanggal_input" class="form-label">Tanggal Input</label>
                        <input type="text" class="form-control" name="tanggal_input" disabled />
                    </div>
                    <!-- Masa pakai -->
                    <div class="mb-3">
                        <label for="masa_pakai" class="form-label">Masa Pakai</label>
                        <input type="number" class="form-control" name="masa_pakai" min='1' required/>
                    </div>
                    <!-- Pengingat -->
                    <!-- <div class="mb-3">
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-4">
                                <label for="pengingat" class="col-form-label">Sampaikan pengingat</label>
                            </div>
                            <div class="col-2">
                                <input type="number" name="pengingat" class="form-control" min="1">
                            </div>
                            <div class="col-6">
                                <span id="passwordHelpInline" class="form-text">
                                    hari sebelum waktunya pemeliharaan
                                </span> 
                            </div>
                        </div>
                    </div> -->
                    <!-- Button -->
                    <div class="row g-3 align-items-center justify-content-end mt-1">
                        <div class="col-4">
                            <button type="submit" name="input" class="btn btn-primary text-white">Input Barang</button>
                        </div>
                        <div class="col-2">
                            <button type="reset" class="btn btn-danger text-white">Batalkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

            
        <div class = "container mb-5">
            <div class="d-flex justify-content-start">
                <a href="input_ruangan.php">
                    <button class="btn btn-secondary me-3">Ruangan</button>
                </a>
                <a href="input_kondisi.php">
                    <button class="btn btn-secondary me-3">Kondisi</button>
                </a>
                <a href="input_sumber.php">
                    <button class="btn btn-secondary me-3">Sumber</button>
                </a>
            </div>
        </div>                        
           
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>