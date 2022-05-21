<?php

include("config.php");
include("Functions/function_ruangan.php");

// jika tombol input ruangan diklik
if(isset($_POST['input']))
{
    if(add_ruangan($_POST) > 0){
        echo "
            <script>
                alert('Ruangan berhasil ditambahkan!');
                header('location:../input_ruangan.php');
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Ruangan gagal ditambahkan!');
                header('location:../input_ruangan.php');
            </script>
        ";
    }
}

?>