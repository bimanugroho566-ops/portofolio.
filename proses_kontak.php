<?php
include "koneksi.php";

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak(nama,pesan)
        VALUES('$nama','$pesan')";

if(mysqli_query($koneksi,$sql)){
    die("DATA MASUK");
}else{
    die("ERROR : " . mysqli_error($koneksi));
}
?>