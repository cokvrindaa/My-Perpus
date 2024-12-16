<?php
    //agar tidak masuk langsung ke main tanpa login. 
    session_start();

    if (!isset($_SESSION["name"])){
        echo "
        <script>
            alert('login terlebih dahulu!!!');
            location.href = 'index.php';
        </script>
    ";
    }
?>

<?php
    // Koneksi ke database
    include "config.php";
    // Query untuk menghitung jumlah baris di tabel datanegara
    $result = $koneksi->query("SELECT COUNT(*) AS total_data FROM datanegara");
    $row = $result->fetch_assoc();

    // Ambil jumlah data
    $total_data = $row['total_data'];


    // Inisialisasi variabel untuk jumlah buku berdasarkan status
    $jumlah_di_pinjam = 0;
    $jumlah_di_balikan = 0;

    // Query untuk menghitung jumlah buku dengan status "Di pinjam"
    $sql_pinjam = "SELECT COUNT(*) AS jumlah_buku FROM crudtabel.datanegara WHERE status = 'Di pinjam'";
    $query_pinjam = mysqli_query($koneksi, $sql_pinjam);
    if ($query_pinjam) {
        $data_pinjam = mysqli_fetch_assoc($query_pinjam);
        $jumlah_di_pinjam = $data_pinjam['jumlah_buku'];
    }

    // Query untuk menghitung jumlah buku dengan status "Di balikan"
    $sql_balikan = "SELECT COUNT(*) AS jumlah_buku FROM crudtabel.datanegara WHERE status = 'Di balikan'";
    $query_balikan = mysqli_query($koneksi, $sql_balikan);
    if ($query_balikan) {
    $data_balikan = mysqli_fetch_assoc($query_balikan);
    $jumlah_di_balikan = $data_balikan['jumlah_buku'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    <?php include "styledashboard.css";
    ?>
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/1897315b86.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="kontainerutama">

        <div class="navbar">
            <div class="judul">
                <i>
                    <h1>My <span>perpus</span></h1>
                </i>
            </div>
            <div class="navsamping">
                <a href="dashboard.php">
                    <button>Dashboard</button>
                </a>
                <a href="main.php">
                    <button>Halaman Tabel</button>
                </a>
                <a href="logout.php">
                    <button>Log Out</button>

                </a>
            </div>

        </div>
        <div class="dataatas">

            <div class="box">
                <i class="fa-solid fa-user"></i>
                <div class="pembungkusteks">
                    <p>nama kamuu...</p>
                    <h1>
                        <?php echo $_SESSION["name"]?>
                    </h1>
                </div>

            </div>
            <div class="box">
                <i class="fa-solid fa-book"></i>
                <div class="pembungkusteks">
                    <p>jumlah peminjam bukuu...</p>
                    <h1>
                        <?php echo $total_data?>
                        buku
                    </h1>
                </div>
            </div>
            <div class="box">
                <i class="fa-brands fa-readme"></i>
                <div class="pembungkusteks">
                    <p>status buku di pinjam...</p>
                    <h1>
                        <?php echo $jumlah_di_pinjam?>
                        buku
                    </h1>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-check"></i>
                <div class="pembungkusteks">
                    <p>status buku di balikan...</p>
                    <h1>
                        <?php echo $jumlah_di_balikan?>
                        buku
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>