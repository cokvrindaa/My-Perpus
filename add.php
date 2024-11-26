<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <div class="kontaineratas">
            <h3>Employee List</h3>
        </div>
        <div class="form-table">
            <form action="employee.php" method="post">
                <div class="employee">
                    <div>
                        <label for="nama">Name: </label>
                        <input type="text" placeholder="Enter Username" name="nama" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter Email" name="email" required>
                    </div>
                    <div>
                        <label for="alamat">Alamat</label>
                        <input type="text" placeholder="Tuliskan Alamat" name="alamat" required>
                    </div>
                    <div>
                        <label for="telepon">Telepon :</label>
                        <input type="text" placeholder="Enter telepon " name="telepon" required>
                    </div>
                    <div>
                        <div>
                            <input type="submit" value="submit">
                            <a href="index.php">View Tabel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>