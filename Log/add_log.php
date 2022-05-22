<?php

include("../config.php");
include("../Functions/function_barang.php");

if(isset($_POST['tambah']))
{
    if(add_kondisi($_POST) > 0){
        echo "
            <script>
                alert('Log data berhasil ditambahkan!');
                window.location.href = '../log_barang.php'
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Log data gagal ditambahkan!');
                window.location.href = '../log_barang.php'
            </script>
        ";
    }
}

?>