<?php

include("../config.php");
include("../Functions/function_pinjam.php");

$kode = $_GET["kode_barang"];

if(add_peminjaman($kode) > 0 ) 
{
    echo "
    <script>
        alert('Barang berhasil dipinjam!');
        window.location.href = '../peminjaman.php'
    </script>
    ";
}
else{
    echo "
    <script>
        alert('Barang gagal dipinjam!');
        window.location.href = '../peminjaman.php'
    </script>
    ";
}

?>