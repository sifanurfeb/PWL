<?php 
require "editcabang-proses.php";

$id = $_GET["id"];

$query="SELECT * FROM data_cabang WHERE id_cabang='$id'";
$hasil = mysqli_query($db, $query);
$silat=mysqli_fetch_array($hasil);
if(isset($_POST["kirim"])){
    if(ubahcabang($_POST > 0 )){
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-4">
        <h1 class=" display-1 text-center">Update Data Cabang</h1>
        <hr>
        <form action="" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control" id="cab" name="cab" value="<?= $silat["id_cabang"];?>">
            </div>
        <div class="mb-3">
            <label for="namacab" class="form-label">Nama Cabang</label>
            <input type="text" class="form-control" id="namacab" name="namacab" value="<?=$silat["nama_cabang"];?>">
            </div>
            <div class="mb-3">
            <label for="alamatcab" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$silat["alamat"];?>">
            </div>
            <button type="submit"class="btn btn-primary" name="kirim">Submit</button>
        </form>
    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>