<?php
    include "config.php";
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $sql = "update crudtabel.datanegara set nama = '$nama', email = '$email', alamat = '$alamat', telepon = '$telepon' where id = '$id'";
    
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