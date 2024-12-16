<?php
    // Mulai sesion
    session_start();
    include 'config2.php';
    // cek database
    $username = $_POST['username'];
    $pw = $_POST['password'];
    $sql = "select * from userdata.user where username = '$username' and pw = '$pw'";
    $query = mysqli_query($koneksi, $sql);
    // jika ada row maka jalankan di bawah
    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_assoc($query);
        // jika ada username maka akan alert.
        $_SESSION["name"] = $data["username"];
        
        echo "
            <script>
                alert('berhasill');
                location.href = 'dashboard.php';
            </script>
        ";
    }
    // kalau tidak sesuai maka jalankan ini
    else{
        echo "
        <script>
            alert('ga sesuai!!!!');
            location.href = 'index.php';
        </script>
    ";
    }

?>