<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>
<body>
    <div class="kontainer">
        <div class="kontaineratas">
            <h3>Edit Employe</h3>
        </div>
        <div class="form-table">
            <form action="update.php" method="post">
                <div class="employee">
                    <?php
                        include "config.php";
                        $id = $_GET['id'];
                        $sql = "select * from crudtabel.datanegara where id = '$id'";
                        $query = mysqli_query($koneksi, $sql);
                        foreach($query as $data){
                    ?>
                        <input type="text" value="<?php echo $id?>" name="id" hidden>
                        <div>
                            <label for="name">Nama : </label>
                            <input type="text" value="<?php echo $data['nama']?>" name="nama">
                        </div>
                        <div>
                            <label for="name">Email : </label>
                            <input type="text" value="<?php echo $data['email']?>" name="email">
                        </div>
                        <div>
                            <label for="name">Alamat : </label>
                            <input type="text" value="<?php echo $data['alamat']?>" name="alamat">
                        </div>
                        <div>
                            <label for="name">Telepon :</label>
                            <input type="text" value="<?php echo $data['telepon']?>" name="telepon">
                        </div>
                        <div>
                            <div>
                                <input type="submit" value="submit">
                                <a href="index.php">View Table</a>
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