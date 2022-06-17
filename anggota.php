<?php 

//membuat query tampil / SELECT FROM
require "home.php";
require "function.php";
$silat_baru = query("SELECT * FROM data_anggota");
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
        <h1 class="text-center display-1 mb-3">Data Anggota</h1>
        <hr>
        <a href="tambah-anggota.php" class="btn btn-primary">Tambah Data Anggota</a>
        
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Tangal Lahir</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($silat_baru as $silat): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $silat["id_anggota"];?></td>
                        <td><?= $silat["nama_anggota"];?></td>
                        <td><?= $silat["jen_kel"];?></td>
                        <td><?= $silat["ttl"];?></td>
                        <td><?= $silat["alamat"];?></td>
                        <td>
                            <!-- tambahin file edit sm file hapus di sini  -->
                            <a href="editanggota.php?id=<?= $silat['id_anggota'];?>" class="btn btn-success">Update</a>
                            <a href="delete-anggota.php?id=<?=$silat['id_anggota'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>