<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $user_id = $_SESSION['user_id'];
    $produk_id = $_POST['produk_id'];
    $quantity = $_POST['qty'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO transaksi (user_id,produk_id,quantity) VALUES ('$user_id','$produk_id','$quantity')";
    $query2 = "UPDATE produk SET stok = stok - '$quantity' WHERE produk_id = '$produk_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query) and $conn->query($query2)) {
        if ($_POST['index'] == 1) {

            header("Location: ../../index.php");
            exit;
        } else {
            header("Location: ../index.php");
            exit;
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
