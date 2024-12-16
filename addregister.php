<?php
include "config2.php";
$username = $_POST['username'];
$pw = $_POST['pw'];
$sql = "insert into userdata.user values('', '$username','$pw')";
$query = mysqli_query($koneksi, $sql);
if ($query){
    echo "
        <script>
            alert('data berhasil ditambahkan');
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