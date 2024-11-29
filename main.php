<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Perpus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
    <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="kontainer">
        <div class="kontaineratas">
            <i>
                <h3 style="font-size: 30px;">My <span>Perpus</span></h3>
            </i>
            <a href="add.php">
                <button>Tambahkan data</button>
            </a>
        </div>
        <div class="form-table">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
                <?php
                    include "config.php";
                    $sql = "select * from crudtabel.datanegara";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    foreach ($query as $data){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['telepon'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id'] ?>" class="edit">Edit</a>

                        <a href="hapus.php?id=<?php echo $data['id'] ?>" class="hapus">Delate</a>
                    </td>
                </tr>
                <?php
                        $no += 1;
                    }
                    ?>
            </table>
        </div>
    </div>
</body>

</html>