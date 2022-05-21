<?php

include("../config.php");
include("../Functions/function_ruangan.php");

if(isset($_POST['input']))
{
    if(add_ruangan($_POST) > 0){
        echo "
            <script>
                alert('Ruangan berhasil ditambahkan!');
                window.location.href = '../input_ruangan.php'
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Ruangan gagal ditambahkan!');
                window.location.href = '../input_ruangan.php'
            </script>
        ";
    }
}

?>