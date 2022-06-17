<?php 
//koneksi database
$db = mysqli_connect("localhost","root","","silat_baru");
// if(!$db){
//     echo "<script>
//         alert('Koneksi Gagal!');
//         </script>";
// }
// else{
//     echo "<script>
//         alert('Koneksi Berhasil!');
//         </script>";
// }

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $jenkel = htmlspecialchars($data["jenkel"]);
    $ttl = htmlspecialchars($data["ttl"]);
    $alamat = htmlspecialchars($data["alamat"]);

    //query insert data
    global $db;
    $query = "INSERT INTO data_anggota VALUES
            ('$id','$nama','$jenkel','$ttl','$alamat')";

    //memanggil query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function tambahcabang($data){
    
    $id = htmlspecialchars($data["cab"]);
    $nama = htmlspecialchars($data["namacab"]);
    $alamat = htmlspecialchars($data["alamatcab"]);

    //query insert data
    global $db;
    $query = "INSERT INTO data_cabang VALUES
            ('$id','$nama','$alamat')";

    //memanggil query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function tambahpelatih($data){
    
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $jenkel = htmlspecialchars($data["jenkel"]);
    $alamat = htmlspecialchars($data["alamat"]);

    //query insert data
    global $db;
    $query = "INSERT INTO data_pelatih VALUES
            ('$id','$nama','$jenkel','$alamat')";

    //memanggil query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function tanding($data){
    
    $id_tanding = htmlspecialchars($data["id_tanding"]);
    $id_anggota = htmlspecialchars($data["id_anggota"]);
    $id_cabang = htmlspecialchars($data["id_cabang"]);
    $id_pelatih = htmlspecialchars($data["id_pelatih"]);
    $jadwal = htmlspecialchars($data["jadwal"]);
    $nama = htmlspecialchars($data["nama"]);

    //query insert data
    global $db;
    $query = "INSERT INTO data_tanding VALUES
            ('$id_tanding','$id_anggota','$id_cabang','$id_pelatih','$jadwal','$nama')";

    //memanggil query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function ubahtanding($data){
    $id_tanding = htmlspecialchars($data["id_tanding"]);
    $id_anggota = htmlspecialchars($data["id_anggota"]);
    $id_cabang = htmlspecialchars($data["id_cabang"]);
    $id_pelatih = htmlspecialchars($data["id_pelatih"]);
    $jadwal = htmlspecialchars($data["jadwal"]);
    $nama = htmlspecialchars($data["nama"]);

    //query insert data
    global $db;
    $query = "UPDATE data_tanding SET
                jadwal_tanding = '$jadwal',
                nama_tanding = '$nama'";

    //memanggil query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function hapusanggota($id){
    global $db;
    mysqli_query($db, "DELETE FROM data_anggota WHERE id_anggota='$id'");

    return mysqli_affected_rows($db);

}
function hapuscabang($id){
    global $db;
    mysqli_query($db, "DELETE FROM data_cabang WHERE id_cabang='$id'");

    return mysqli_affected_rows($db);

}
function hapuspelatih($id){
    global $db;
    mysqli_query($db, "DELETE FROM data_pelatih WHERE id_pelatih='$id'");

    return mysqli_affected_rows($db);

}
function hapustanding($id){
    global $db;
    mysqli_query($db, "DELETE  FROM data_tanding WHERE id_tanding='$id'");

    return mysqli_affected_rows($db);

}
?>