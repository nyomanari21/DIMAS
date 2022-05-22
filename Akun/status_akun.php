<?php

include("../config.php");
include("../Functions/function_akun.php");

if(isset($_GET['username_pengurus']))
{
    $kode = $_GET["username_pengurus"];

    if(status_pengurus($kode) > 0 ) 
    {
        echo "
        <script>
            alert('Data pengurus berhasil dipindahkan!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    } 
    else 
    {
        echo "
        <script>
            alert('Data pengurus gagal dipindahkan!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    }
}
else if(isset($_GET['username_jamaah']))
{
    $kode = $_GET["username_jamaah"];

    if(status_jamaah($kode) > 0 ) 
    {
        echo "
        <script>
            alert('Data jamaah berhasil dipindahkan!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    } 
    else 
    {
        echo "
        <script>
            alert('Data jamaah gagal dipindahkan!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    }
}

?>