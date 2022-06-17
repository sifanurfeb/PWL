<?php 

//memanggil file function
require "function.php";
require "home.php"; 

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["kirim"])){

    if(tanding($_POST) > 0){
       echo "<script>  
            alert('Data berhasil ditambahkan!');
            document.location.href = 'tanding.php';
                </script>";
    }
    else{
        echo "<script>
        alert('Data Gagal ditambahkan!');
        document.location.href = 'tanding.php';
        </script>";
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
        <h1 class=" display-1 text-center">Tambah Data Tanding</h1>
        <hr>
        <form action="" method="post">
        <div class="mb-3">
            <label for="id_tanding" class="form-label">ID Tanding</label>
            <input type="text" class="form-control" id="id_tanding" name="id_tanding" placeholder="Masukkan ID Tanding">
        </div>
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Masukkan ID Anggota">
        </div>
        <div class="mb-3">
            <label for="id_cabang" class="form-label">ID Cabang</label>
            <input type="text" class="form-control" id="id_cabang" name="id_cabang" placeholder="Masukkan ID Cabang">
        </div>
        <div class="mb-3">
            <label for="id_pelatih" class="form-label">ID Pelatih</label>
            <input type="text" class="form-control" id="id_pelatih" name="id_pelatih" placeholder="Masukkan Jadwal Tanding">
        </div>
        <div class="mb-3">
            <label for="jadwal" class="form-label">Jadwal Tanding</label>
            <input type="text" class="form-control" id="jadwal" name="jadwal" placeholder="Masukkan Jadwal Tanding">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Tanding</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Tanding">
        </div>
            <button type="submit"class="btn btn-primary mt-3" name="kirim">Submit</button>
        </form>
    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>