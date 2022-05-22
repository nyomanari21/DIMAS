<?php

include("../config.php");
include("../Functions/function_barang.php");

if(isset($_POST['input']))
{
    if(add_barang($_POST) > 0){
        echo "
            <script>
                alert('Barang berhasil ditambahkan!');
                window.location.href = '../data_barang.php'
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Barang gagal ditambahkan!');
                window.location.href = '../data_barang.php'
            </script>
        ";
    }
}

?>