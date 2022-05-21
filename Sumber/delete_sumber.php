<?php

include("../config.php");
include("../Functions/function_sumber.php");

$kode = $_GET["kode_sumber"];

if(delete_sumber($kode) > 0 ) 
{
    echo "
    <script>
        alert('Data sumber berhasil dihapus!');
        window.location.href = '../input_sumber.php'
    </script>
    ";
} 

?>