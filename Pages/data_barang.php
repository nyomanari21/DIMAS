<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Data Inventaris</title>
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
        <div class="container p-5">
            <!-- search bar -->
            <div class="d-flex flex-row justify-content-between">
                <!-- <div class="row"> -->
                <div class="col-md-3">
                    <form action="" method="post">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- <div class="row"> -->
                <div class="row">
                    <div class="d-flex">
                        <button type="button" class="btn btn-outline-light ">
                            <img src="Assets/group_by.png" class="p-1" label for="sort">Group by</label>
                        </button>
                        <button type="button" class="btn btn-outline-light ">
                            <img src="Assets/filter.png" class="p-1" label for="sort">Filter</label>
                        </button>
                        <button type="button" class="btn btn-outline-light ">
                            <img src="Assets/sort.png" class="p-1" label for="sort">Sort</label>
                        </button>
                    </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
            <!-- end of search bar -->
            <!-- table -->
            <table class="border border-5 border-primary table table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kuantitas</th>
                        <th>Nama Ruangan</th>
                        <th>Kondisi</th>
                        <th>Tanggal Input</th>
                        <th>Aksi</th>
                    </tr>

                </thead>
                <tbody class="table-secondary">
                
                    <?php
                        foreach ($data_barang as $row)
                        {
                            echo "<tr>
                                        <td> {$row['kd_barang']} </td>
                                        <td> {$row['nama_barang']} </td>
                                        <td> {$row['kuantitas']} </td>
                                        <td> {$row['nama_ruangan']} </td>
                                        <td> {$row['nama_kondisi']} </td>
                                        <td> {$row['tanggal_input']} </td>
                                        <td>
                                            <a class='btn text-white btn-primary btn-sm' href='update_barang.php?kode_barang={$row['kd_barang']}'>Edit</a>
                                            <a class='btn text-white btn-danger btn-sm' href='Barang/delete_barang.php?kode_barang={$row['kd_barang']}'>Hapus</a>
                                        </td>
                                </tr>";
                        }

                        mysqli_close($koneksi);
                    ?>
                
                </tbody>
            </table>
            <!-- end of table -->
            <div class="d-flex justify-content-end mx-4 mb-3 mb-lg-4">
                <a href="log_barang.php" class="me-auto">
                    <button class="btn text-white btn-warning btn me-3">Log</button>
                </a>
                <button type="" name="ubah" class="btn text-white btn-primary btn me-3">Ubah</button>
                <button type="" name="hapus" class="btn text-white btn-danger btn me-3">Hapus</button>
            </div>
        </div>
    </section>
    <script src="" async defer></script>
</body>

</html>