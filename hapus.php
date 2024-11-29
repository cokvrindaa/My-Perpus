<?php
    include "config.php";
    $id = $_GET['id'];
    $sql = "delete from crudtabel.datanegara where id = '$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query){
        echo "
            <script>
                alert('berhasil di hapus');
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