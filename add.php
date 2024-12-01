<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    <?php include "style.css"?>
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
            <h3>Tambahkan data</h3>
        </div>
        <div class="form-table">
            <form action="tambahdata.php" method="post">
                <div class="form">
                    <div class="input">
                        <label for="nama">Judul buku: </label>
                        <input type="text" placeholder="Tuliskan judul buku" name="buku" required>
                    </div>
                    <div class="input">
                        <label for="nama">Name: </label>
                        <input type="text" placeholder="Tuliskan Username" name="nama" required>
                    </div>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Tuliskan Email" name="email" required>
                    </div>
                    <div class="input">
                        <label for="alamat">Alamat</label>
                        <input type="text" placeholder="Tuliskan Alamat" name="alamat" required>
                    </div>
                    <div class="input">
                        <label for="telepon">Telepon :</label>
                        <input type="text" placeholder="Tuliskan telepon " name="telepon" required>
                    </div>
                    <div>
                        <div>
                            <input type="submit" value="submit" class="submit">
                            <a href="main.php" class="back">Lihat Tabel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>