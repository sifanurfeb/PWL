<?php 

//memanggil file function
require "function.php";
require "home.php"; 

//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["kirim"])){

    if(tambahcabang($_POST) > 0){
       echo "<script>  
            alert('Data berhasil ditambahkan!');
            document.location.href = 'cabang.php';
                </script>";
    }
    else{
        echo "<script>
        alert('Data Gagal ditambahkan!');
        document.location.href = 'cabang.php';
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
        <h1 class=" display-1 text-center">Tambah Data Cabang</h1>
        <hr>
        <form action="" method="post">
        <div class="mb-3">
            <label for="cab" class="form-label">ID Cabang</label>
            <input type="text" class="form-control" id="cab" name="cab" placeholder="Masukkan ID Anggota">
            </div>
        <div class="mb-3">
            <label for="namacab" class="form-label">Nama Cabang</label>
            <input type="text" class="form-control" id="namacab" name="namacab" placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
            <label for="alamatcab" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamatcab" name="alamatcab" rows="3"></textarea>
            </div>
            <button type="submit"class="btn btn-primary" name="kirim">Submit</button>
        </form>
    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>