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
    <?php include("Skin/navbar-admin.html"); ?>

    <!-- Form Ruangan -->
    <section>
        <div class="container my-4">
            <form class="row" method="post" action="">
                <div class="col-lg-6">
                    <!-- Kode Ruangan -->
                    <div class="mb-3">
                        <label for="kode_ruangan" class="form-label">Kode Ruangan</label>
                        <input type="text" class="form-control" nama="kode_ruangan">
                    </div>
                    <!-- Nama Ruangan -->
                    <div class="mb-3">
                        <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" nama="nama_ruangan">
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Button -->
                    <div class="row g-3 align-items-center mt-1">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Input Ruangan</button>
                        </div>
                        <div class="col-2">
                            <button type="reset" class="btn btn-danger">Batalkan</button>
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
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Ruangan</th>
                        <th>Nama Ruangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </section>

</body>

</html>