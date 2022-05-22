<?php

include("../config.php");
include("../Functions/function_pinjam.php");

$kode = $_GET["kode_pinjam"];

if(update_peminjaman($kode) > 0 ) 
{
    echo "
    <script>
        alert('Status barang berhasil diupdate!');
        window.location.href = '../peminjaman.php'
    </script>
    ";
}
else{
    echo "
    <script>
        alert('Status barang gagal diupdate!');
        window.location.href = '../peminjaman.php'
    </script>
    ";
}

?>