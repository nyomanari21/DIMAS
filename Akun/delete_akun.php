<?php

include("../config.php");
include("../Functions/function_akun.php");

if(isset($_GET['username_pengurus']))
{
    $kode = $_GET["username_pengurus"];

    if(delete_pengurus($kode) > 0 ) 
    {
        echo "
        <script>
            alert('Data pengurus berhasil dihapus!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    } 
    else 
    {
        echo "
        <script>
            alert('Data pengurus gagal dihapus!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    }
}
else if(isset($_GET['username_jamaah']))
{
    $kode = $_GET["username_jamaah"];

    if(delete_jamaah($kode) > 0 ) 
    {
        echo "
        <script>
            alert('Data jamaah berhasil dihapus!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    } 
    else 
    {
        echo "
        <script>
            alert('Data jamaah gagal dihapus!');
            window.location.href = '../pengaturan_akun.php'
        </script>
        ";
    }
}

?>