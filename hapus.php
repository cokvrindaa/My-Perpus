<?php
    include "config.php";
    $id = $_GET['id'];
    $sql = "delete from crudtabel.datanegara where id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query){
        echo "
            <script>
                alert('berhasil di hapus');
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