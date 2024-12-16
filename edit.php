<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    <?php include "styleedit.css"?>
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="kontainer">
        <div class="kontaineratas">
            <h3>Edit Data</h3>
        </div>
        <div class="form-table">
            <form action="update.php" method="post">
                <div class="form">
                    <?php
                        include "config.php";
                        $id = $_GET['id'];
                        $sql = "select * from crudtabel.datanegara where id = '$id'";
                        $query = mysqli_query($koneksi, $sql);
                        foreach($query as $data){
                    ?>
                    <input type="text" value="<?php echo $id?>" name="id" hidden>
                    <div class="input">
                        <label for="name">Judul Buku : </label>
                        <input type="text" value="<?php echo $data['buku']?>" name="buku">
                    </div>
                    <div class="input">
                        <label for="name">Nama : </label>
                        <input type="text" value="<?php echo $data['nama']?>" name="nama">
                    </div>
                    <div class="input">
                        <label for="name">Email : </label>
                        <input type="text" value="<?php echo $data['email']?>" name="email">
                    </div>
                    <div class="input">
                        <label for="name">Alamat : </label>
                        <input type="text" value="<?php echo $data['alamat']?>" name="alamat">
                    </div>
                    <div class="input">
                        <label for="name">Telepon :</label>
                        <input type="text" value="<?php echo $data['telepon']?>" name="telepon">
                    </div>
                    <div class="input">
                        <label for="status">Status:</label>
                        <input type="radio" name="status" value="Di pinjam"
                            <?php echo ($data['status'] == 'Di pinjam') ? 'checked' : ''; ?>> Pinjam
                        <input type="radio" name="status" value="Di balikan"
                            <?php echo ($data['status'] == 'Di balikan') ? 'checked' : ''; ?>> Balikan
                    </div>
                    <div>
                        <div class="paratombol">
                            <input type="submit" value="Submit" class="submit">
                            <a href="main.php">Lihat Table</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>