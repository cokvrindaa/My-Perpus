<?php
    include "config.php";
    $id = $_POST['id'];
    $buku = $_POST['buku'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $sql = "update crudtabel.datanegara set buku = '$buku', nama = '$nama', email = '$email', alamat = '$alamat', telepon = '$telepon' where id = '$id'";
    
    $query = mysqli_query($koneksi, $sql);
    if ($query){
        echo "
            <script>
                alert('berhasil di edit');
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