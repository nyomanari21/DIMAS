<?php

include("config.php");
include("Functions/function_pinjam.php");

if(!isset($_SESSION['identifier']))
{
    header("location:login.php");
}

if($_SESSION['identifier'] == "jamaah")
{
    $data_peminjaman = show_peminjaman();
}
else
{
    $data_peminjaman = lihat_peminjaman();
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
    <title>Daftar Peminjaman</title>
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
            <h2>Daftar Peminjaman</h2>
        </div>
    </section>

    <!-- Tabel Ruangan -->
    <section>
        <div class="container my-5">
            <!-- Isi tabel -->
            <table class="border border-5 border-primary table table-striped">
                <?php
                    if($_SESSION['identifier'] == "jamaah")
                    {
                        echo "<thead class='table-primary'>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Status Peminjaman</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>";
                        echo "<tbody class='table-secondary'>";
                            $i = 1;
                            foreach ($data_peminjaman as $row)
                            {
                                echo "<tr>
                                        <td> $i </td>
                                        <td> {$row['username_jamaah']} </td>
                                        <td> {$row['nama_barang']} </td>
                                        <td> {$row['tanggal_peminjaman']} </td>
                                        <td> {$row['tanggal_pengembalian']} </td>
                                        <td> {$row['status_peminjaman']} </td>";
    
                                    if($row['status_peminjaman'] == "Belum Dikembalikan")
                                    {
                                        echo "<td>
                                                <a class='btn text-white btn-primary btn-sm' href='Pinjam/update_peminjaman.php?kode_pinjam={$row['id_peminjaman']}'>Kembalikan</a>
                                            </td>";
                                    }
                                    else
                                    {
                                        echo "<td></td>";
                                    }
                                echo "</tr>";
                                $i++;
                            }
                        echo "</tbody>";
                        mysqli_close($koneksi);
                    }
                    else
                    {
                        echo "<thead class='table-primary'>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Status Peminjaman</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>";
                        echo "<tbody class='table-secondary'>";
                            $i = 1;
                            foreach ($data_peminjaman as $row)
                            {
                                echo "<tr>
                                        <td> $i </td>
                                        <td> {$row['username_jamaah']} </td>
                                        <td> {$row['nama_barang']} </td>
                                        <td> {$row['tanggal_peminjaman']} </td>
                                        <td> {$row['tanggal_pengembalian']} </td>
                                        <td> {$row['status_peminjaman']} </td>";

                                        if($row['status_peminjaman'] == "Belum Dikembalikan")
                                        {
                                            echo "<td>
                                                    <a class='btn text-white btn-primary btn-sm' href='Pinjam/update_peminjaman.php?kode_pinjam={$row['id_peminjaman']}'>Kembalikan</a>
                                                    <a class='btn text-white btn-danger btn-sm' href='Pinjam/delete_peminjaman.php?kode_pinjam={$row['id_peminjaman']}'>Hapus</a> 
                                                </td>";
                                        }
                                        else
                                        {
                                            echo "<td>
                                                <a class='btn text-white btn-danger btn-sm' href='Pinjam/delete_peminjaman.php?kode_pinjam={$row['id_peminjaman']}'>Hapus</a> 
                                            </td>";
                                        }
                                        
                                    echo "</tr>";
                                $i++;
                            }
                        echo "</tbody>";
                        mysqli_close($koneksi);
                    }
                ?>
            </table>
        </div>
    </section>

</body>

</html>