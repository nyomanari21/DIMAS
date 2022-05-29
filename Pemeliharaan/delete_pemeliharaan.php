<?php

include("../config.php");
include("../Functions/function_pemeliharaan.php");

$kode = $_GET["kode_barang"];

if(delete_pemeliharaan($kode) > 0 ) 
{
    echo "
    <script>
        alert('Data pemeliharaan berhasil dihapus!');
        window.location.href = '../pemeliharaan.php'
    </script>
    ";
}
else{
    echo "
    <script>
        alert('Data pemeliharaan gagal dihapus!');
        window.location.href = '../pemeliharaan.php'
    </script>
    ";
}

?>