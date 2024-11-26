<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Perpus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <div class="kontaineratas">
            <h3>My Perpus</h3>
            <a href="add.php">
            <button>Add employee</button>
            </a>
        </div>
        <div class="form-table">
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
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

                            <a href="hapus.php?id=<?php echo $data['id'] ?>">Delate</a>
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