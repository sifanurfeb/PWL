<?php 
require "home.php";
require "function.php";
$silat_baru = query("SELECT * FROM data_pelatih");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center display-1 mb-3">Data Pelatih</h1>
        <hr>
        <a href="tambahpelatih.php" class="btn btn-primary">Tambah Data Pelatih</a>
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pelatih</th>
                    <th>Nama Pelatih</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($silat_baru as $silat): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $silat["id_pelatih"];?></td>
                        <td><?= $silat["nama_pelatih"];?></td>
                        <td><?= $silat["jenkel"];?></td>
                        <td><?= $silat["alamat"];?></td>
                        <td>
                            <a href="edit-pelatih-form.php?id=<?= $silat["id_pelatih"];?>" class="btn btn-success">Update</a>
                            <a href="delete-pelatih.php?id=<?= $silat["id_pelatih"];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>