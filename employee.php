<?php
include "config.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$sql = "insert into crudtabel.datanegara values('', '$nama', '$email', '$alamat', '$telepon')";
$query = mysqli_query($koneksi, $sql);
if ($query){
    echo "
        <script>
            alert('new employee');
            location.href = 'index.php';
        </script>
    ";
}
else{
    echo "
        <script>
            alert('failed');
            location.href = 'index.php';
        </script>
    ";
}
?>