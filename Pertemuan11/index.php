<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Contoh Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <h1>Logo</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <?php
                session_start();

                if (!empty($_SESSION['email'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?= $_SESSION['email'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin/produk.php">Product</a>
                    </li>
                <?php
                } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
    <!-- Card Produk -->
    <div class="container mt-5">
        <div class="row">
            <?php

            include 'connect.php';
            // menggunakan query sql agar menampilkan data produk dan join kedalam tabel user agar mendapatkan siapa pemilik produk
            $query = "SELECT * FROM produk LEFT JOIN user ON produk.user_id = user.user_id";
            $datas = $conn->query($query);
            foreach ($datas as $data) :

            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/150/150" class="card-imgtop" alt="Gambar Produk 1">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['nama'] ?></h5>
                            <p class="card-text">Harga: <?= $data['harga'] ?></p>
                            <p class="card-text">Stok: <?= $data['stok'] ?></p>
                            <form method="post" action="Admin/transaksi/tambah.php">
                                <div class="form-group">
                                    <input type="hidden" name="produk_id" value="<?= $data['produk_id'] ?>">
                                    <label for="quantity1">Quantity</label>
                                    <input required type="number" class="form-control" id="quantity1" name="qty" min="1" max="<?= $data['stok'] ?>">
                                    <input type="hidden" name="index" value="1">
                                </div>
                                <button type="submit" class="btn btnprimary">Beli</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.mi
n.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>