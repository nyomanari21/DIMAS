<?php

include("../config.php");
include("../Functions/function_sumber.php");

if(isset($_POST['input']))
{
    // $data = $_POST['input'];
    if(add_sumber($_POST) > 0){
        echo "
            <script>
                alert('Data sumber berhasil ditambahkan!');
                window.location.href = '../input_sumber.php'
            </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('Data sumber gagal ditambahkan!');
                window.location.href = '../input_sumber.php'
            </script>
        ";
    }
}

?>