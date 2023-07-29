<?php

include '../cek_role.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>History</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="../history.php">Riwayat
                                Pembelian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produk.php">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Role</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pengguna</h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal">
                        Tambah Data
                    </button>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Quantity</th>
                                <th>Tanggal</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../connect.php';
                            // menggunakan query sql agar menampilkan data produk dan join kedalam tabel user agar mendapatkan siapa pemilik produk
                            $query = "SELECT * FROM transaksi JOIN user ON transaksi.user_id = user.user_id JOIN produk ON transaksi.produk_id = produk.produk_id ORDER BY transaksi.tanggal DESC";
                            $datas = $conn->query($query);
                            foreach ($datas as $data) :
                            ?>
                                <tr>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td><?= $data['quantity'] ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['harga'] * $data['quantity'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editDataModal<?= $data['transaksi_id'] ?>">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusDataModal<?= $data['transaksi_id'] ?>">Hapus</button>
                                    </td>
                                </tr>
                                <!-- Modal ubah data -->
                                <div class="modal fade" id="editDataModal<?= $data['transaksi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" ariahidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editDataModalLabel">Ubah Data Pengguna</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form method="POST" action="transaksi/tambah.php">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="produk">Produk</label>
                                                        <select class="form-control" id="produk" name="produk_id">
                                                            <?php
                                                            $produk = $conn->query("SELECT * FROM produk");
                                                            foreach ($produk as $data) : ?>
                                                                <option value="<?= $data['produk_id'] ?>"><?= $data['nama'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah">Jumlah</label>
                                                        <input required type="number" class="form-control" id="jumlah" name="qty">
                                                    </div>
                                                    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" datadismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btnprimary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Hapus Data -->
                                <div class="modal fade" id="hapusDataModal<?= $data['transaksi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusDataModalLabel">Konfirmasi Penghapusan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data pengguna ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" datadismiss="modal">Batal</button>
                                                <a href="user/hapus.php?id=<?= $data['transaksi_id'] ?>" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!-- Modal tambah data -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="transaksi/tambah.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="produk">Produk</label>
                            <select class="form-control" id="produk" name="produk_id">
                                <?php
                                $produk = $conn->query("SELECT * FROM produk");
                                foreach ($produk as $data) : ?>
                                    <option value="<?= $data['produk_id'] ?>"><?= $data['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input required type="number" class="form-control" id="jumlah" name="qty">
                        </div>
                        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" datadismiss="modal">Tutup</button>
                        <button type="submit" class="btn btnprimary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>