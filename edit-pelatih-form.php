<?php 
require "proses-edit-pelatih.php";

$id = $_GET["id"];

$query="SELECT * FROM data_pelatih WHERE id_pelatih='$id'";
$hasil = mysqli_query($db, $query);
$silat=mysqli_fetch_array($hasil);
if(isset($_POST["kirim"])){
    if(ubahpelatih($_POST > 0 )){
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <h1 class=" display-1 text-center">Update Data Pelatih</h1>
        <hr>
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $silat ["id_pelatih"];?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelatih</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?=$silat ["nama_pelatih"];?>">
            </div>
        <div class="mb-3">
            <label for="jenkel" class="form-label">Jenis Kelamin</label>
            <br>
            <input type="text" name="jenkel" id="jenkel" value="<?= $silat["jenkel"]; ?>">
        </div>
            <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$silat ["alamat"]; ?>">
            </div>
            <button type="submit"class="btn btn-primary" name="kirim">Submit</button>
        </form>
    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>