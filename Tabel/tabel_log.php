<?php
    require_once("../config.php");
    require_once("../Functions/function_log_barang.php");

?>
<div class="table-responsive">
    <table class="border border-5 border-primary table table-striped">
        <thead class="table-primary">
            <tr>
                <th>Username</th>
                <th>Kode Barang</th>
                <th>Tanggal Input</th>
                <th>Status</th>
            </tr>

        </thead>
        <tbody class="table-secondary">

            <?php
            $data_log_barang = search_log();
            
            foreach ($data_log_barang as $row)
            {
                echo "<tr>
                        <td> {$row['username_pengurus']} </td>
                        <td> {$row['kd_barang']} </td>
                        <td> {$row['tanggal_input']} </td>
                        <td> {$row['status']} </td>
                      </tr>";
            }

            mysqli_close($koneksi);
        ?>
        </tbody>
    </table>
    <a class='btn btn-info btn-md m-2 text-white' href='data_barang.php' role='button'>Kembali</a>
</div>