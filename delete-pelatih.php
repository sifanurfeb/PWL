<?php
require "function.php";
$id= $_GET['id'];
var_dump($id);
    if(hapuspelatih($id) > 0 ){
        echo "<script>
        alert('Data berhasil dihapus');
        document.location.href='pelatih.php';
    </script>";
    }
    else{
        echo "<script>
        alert('Data gagal dihapus');
        document.location.href='pelatih.php';
            </script>";
        
    }
?>