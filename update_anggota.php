<?php 
$db = mysqli_connect("localhost", "root", "", "silat_baru");

function ubah(){
    global $db;
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $jenkel = $_POST["jenkel"];
    $ttl = $_POST["ttl"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE data_anggota SET nama_anggota= '$nama', jen_kel='$jenkel', ttl='$ttl', alamat='$alamat' WHERE id_anggota='$id'";
    $hasil = mysqli_query($db, $query);
    if(!$hasil ){
        echo "<script>
            alert('Data gagal diubah');
            document.location.href='anggota.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data berhasil diubah');
        document.location.href='anggota.php';
    </script>";
    }
}
?>