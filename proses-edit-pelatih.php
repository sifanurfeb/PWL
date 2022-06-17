<?php 
$db = mysqli_connect("localhost", "root", "", "silat_baru");

function ubahpelatih(){
    global $db;
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $jenkel = $_POST["jenkel"];
    $alamat = $_POST["alamat"];

    $query = "UPDATE data_pelatih SET nama_pelatih= '$nama', jenkel = '$jenkel', alamat='$alamat' WHERE id_pelatih='$id'";
    $hasil = mysqli_query($db, $query);
    if(!$hasil ){
        echo "<script>
            alert('Data gagal diubah');
            document.location.href='pelatih.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Data berhasil diubah');
        document.location.href='pelatih.php';
    </script>";
    }
}
?>
