<?php
    require("config.php");
    require("Functions/function_barang.php");

    $data_barang = show_barang();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="Style/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <?php
        if($_SESSION['identifier'] == "admin")
        {
            include("Skin/navbar-admin.html"); 
        }
    ?>
    <div class="container my-5">
        <h2 class="text-center">Data Barang Masjid</h2>
        <!-- <h4>(Inventory)</h4> -->
        <div class="data-tables datatable-dark">
            <table class="border border-5 border-primary table table-striped" id="mauexport">
                <thead class="table-primary">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kuantitas</th>
                        <th>Nama Ruangan</th>
                        <th>Kondisi</th>
                        <th>Tanggal Input</th>
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
                            <td> {$row['tanggal_input']} </td>";
                        echo "</tr>";
                    }
                    mysqli_close($koneksi);
                ?>
                </tbody>
            </table>
                <?php
                    if($_SESSION['identifier'] != "jamaah")
                    {
                        echo "<a class='btn btn-info btn-md m-2 text-white' href='data_barang.php' role='button'>Back</a>";
                    }
                ?>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#mauexport').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


</body>

</html>