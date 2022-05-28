<?php
    require_once("../config.php");
    require_once("../Functions/function_pemeliharaan.php");

?>

<div class="table-responsive">
    <table class="border border-5 border-primary table table-striped">
        <thead class="table-primary">
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kuantitas</th>
                <th>Kode Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Kondisi</th>
                <th>Masa Pakai</th>
                <!-- <th>Masa Pakai</th> -->

                <!-- <th>Aksi</th> -->
            </tr>

        </thead>
        <tbody class="table-secondary">

            <?php
            $data_pemeliharaan = search_pemeliharaan();
            
            foreach ($data_pemeliharaan as $row)
            {
                echo "<tr>
                        <td> {$row['kd_barang']} </td>
                        <td> {$row['nama_barang']} </td>
                        <td> {$row['kuantitas']} </td>
                        <td> {$row['kd_ruangan']} </td>
                        <td> {$row['nama_ruangan']} </td>
                        <td> {$row['nama_kondisi']} </td>
                        <td> {$row['lifetime']} Hari</td>
                    </tr>";
            }

            mysqli_close($koneksi);
        ?>

        </tbody>
    </table>
</div>