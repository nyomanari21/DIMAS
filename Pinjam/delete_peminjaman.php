<?php

include("../config.php");
include("../Functions/function_pinjam.php");

$kode = $_GET["kode_pinjam"];

if(hapus_peminjaman($kode) > 0 ) 
{
    echo "
    <script>
        alert('Barang peminjaman berhasil dihapus!');
        window.location.href = '../peminjaman.php'
    </script>
    ";
}
else{
    echo "
    <script>
        alert('Barang peminjaman gagal dihapus!');
        window.location.href = '../peminjaman.php'
    </script>
    ";
}

?>