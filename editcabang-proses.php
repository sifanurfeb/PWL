<?php 
$db = mysqli_connect("localhost", "root", "", "silat_baru");

function ubahcabang(){
    global $db;
    $id = $_POST["cab"];
    $nama = $_POST["namacab"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE data_cabang SET nama_cabang= '$nama', alamat='$alamat' WHERE id_cabang='$id'";
    $hasil = mysqli_query($db, $query);
    if(!$hasil ){
        echo "<script>
            alert('Data gagal diubah');
            document.location.href='cabang.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data berhasil diubah');
        document.location.href='cabang.php';
    </script>";
    }
}
?>