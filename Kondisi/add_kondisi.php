<?php

include("../config.php");
include("../Functions/function_kondisi.php");

if(isset($_POST['input']))
{
    if(add_kondisi($_POST) > 0){
        echo "
            <script>
                alert('Kondisi berhasil ditambahkan!');
                // window.location.href = '../input_kondisi.php'
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Kondisi gagal ditambahkan!');
                // window.location.href = '../input_kondisi.php'
            </script>
        ";
    }
}

?>