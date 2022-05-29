<?php
    require_once("../config.php");
    require_once("../Functions/function_pemeliharaan.php");
    session_start();
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
                <?php
                    if($_SESSION['identifier'] != "jamaah")
                    {
                        echo "<th>Aksi</th>";
                    }
                ?>
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
                        <td> {$row['lifetime']} Hari</td>";
                        if($_SESSION['identifier'] != "jamaah")
                        {
                            echo "<td>
                                    <a class='btn text-white btn-primary btn-sm' href='update_pemeliharaan.php?kode_barang={$row['kd_barang']}'>Edit</a>
                                    <a class='btn text-white btn-danger btn-sm' href='pemeliharaan/delete_pemeliharaan.php?kode_barang={$row['kd_barang']}'>Hapus</a>
                                </td>";
                        }

      
                    echo "</tr>";
            }

            mysqli_close($koneksi);
        ?>

        </tbody>
    </table>
</div>