<?php
include "config.php";
$nama = $_POST['nama'];
$buku = $_POST['buku'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$sql = "insert into crudtabel.datanegara values('', '$buku', '$nama', '$email', '$alamat', '$telepon')";
$query = mysqli_query($koneksi, $sql);
if ($query){
    echo "
        <script>
            alert('data berhasil ditambahkan');
            location.href = 'main.php';
        </script>
    ";
}
else{
    echo "
        <script>
            alert('failed');
            location.href = 'main.php';
        </script>
    ";
}
?>