<?php
    require_once("../config.php");
    require_once("../Functions/function_barang.php");

?>
<div class="table-responsive">
    <table id="data_table" name="data_table" class="border border-5 display border-primary table table-striped">
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
            $data_barang = search_barang();
            
            foreach ($data_barang as $row)
            {
                echo "<tr>
                            <td> {$row['kd_barang']} </td>
                            <td> {$row['nama_barang']} </td>
                            <td> {$row['kuantitas']} </td>
                            <td> {$row['nama_ruangan']} </td>
                            <td> {$row['nama_kondisi']} </td>
                            <td> {$row['tanggal_input']} </td>";
                
                if($_SESSION['identifier'] == "jamaah")
                {
                    echo  "<td>
                                <a class='btn text-white btn-primary btn-sm' href='Pinjam/add_peminjaman.php?kode_barang={$row['kd_barang']}'>Pinjam</a>
                            </td>";
                }
                else
                {
                    echo "<td>
                            <a class='btn text-white btn-primary btn-sm' href='update_barang.php?kode_barang={$row['kd_barang']}'>Edit</a>
                            <a class='btn text-white btn-danger btn-sm' href='Barang/delete_barang.php?kode_barang={$row['kd_barang']}'>Hapus</a>
                            </td>";
                }
                echo "</tr>";
            }

            mysqli_close($koneksi);
        ?>

        </tbody>
    </table>
</div>