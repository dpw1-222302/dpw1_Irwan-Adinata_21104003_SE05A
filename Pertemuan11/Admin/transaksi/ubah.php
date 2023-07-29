<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $user_id = $_SESSION['user_id'];
    $produk_id = $_POST['produk_id'];
    $quantity = $_POST['qty'];
    // mengubah data menggunakan query sql
    $query = "UPDATE transaksi SET quantity = '$quantity' WHERE produk_id = '$produk_id' AND user_id = '$user_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
