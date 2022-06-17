<?php 
require "home.php";
require "function.php";
// $silat_baru = query("SELECT * FROM data_tanding");
$silat_baru = query
("SELECT * FROM data_tanding 
INNER JOIN data_anggota ON data_tanding.id_anggota = data_anggota.id_anggota
INNER JOIN data_cabang ON data_tanding.id_cabang = data_cabang.id_cabang
INNER JOIN data_pelatih ON data_tanding.id_pelatih = data_pelatih.id_pelatih");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tanding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center display-1 mb-3">Data Tanding</h1>
        <hr>
        <a href="tambahtanding.php" class="btn btn-primary">Tambah Data Tanding</a>
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Tanding</th>
                    <th>Nama Anggota</th>
                    <th>Nama Cabang</th>
                    <th>Nama Pelatih</th>
                    <th>Jadwal Tanding</th>
                    <th>Nama Tanding</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($silat_baru as $silat): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $silat["id_tanding"]; ?></td>
                        <td><?= $silat["nama_anggota"]; ?></td>
                        <td><?= $silat["nama_cabang"]; ?></td>
                        <td><?= $silat["nama_pelatih"]; ?></td>
                        <td><?= $silat["jadwal_tanding"];?></td>
                        <td><?= $silat["nama_tanding"];?></td>
                        <td>
                            <a href="edit-tanding.php?id=<?= $silat["id_tanding"];?>" class="btn btn-success">Update</a>
                            <a href="delete-tanding.php?del=<?= $silat["id_tanding"];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>