<?php 

//memanggil file function
require "function.php";
require "home.php"; 

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["kirim"])){

    if(tambahpelatih($_POST) > 0){
       echo "<script>  
            alert('Data berhasil ditambahkan!');
            document.location.href = 'pelatih.php';
                </script>";
    }
    else{
        echo "<script>
        alert('Data Gagal ditambahkan!');
        document.location.href = 'pelatih.php';
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
        <h1 class=" display-1 text-center">Tambah Data Pelatih</h1>
        <hr>
        <form action="" method="post">
        <div class="mb-3">
            <label for="id" class="form-label">ID Pelatih</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan ID Pelatih">
            </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelatih</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
            </div>
        <div class="mb-3">
            <label for="jenkel" class="form-label">Jenis Kelamin</label>
            <br>
            <input type="radio" name="jenkel" id="jenkel" value="Laki Laki"> Laki Laki
            <br>
            <input type="radio" name="jenkel" id="jenkel" value="Perempuan"> Perempuan
            </div>
            <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
            <button type="submit"class="btn btn-primary" name="kirim">Submit</button>
        </form>
    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>