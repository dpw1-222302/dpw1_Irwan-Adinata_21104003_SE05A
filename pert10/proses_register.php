<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan operasi penyimpanan data ke database
    require_once('connect.php');

    // Query untuk menyimpan data pengguna baru ke tabel pengguna
    // Buat query untuk memasukan data user yang tadi diinputkan
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $query = "INSERT INTO user (user, pass, email, no_hp) VALUES ('$user', '$pass', '$email', '$no_hp')";

    if (mysqli_query($conn, $query)) {
        $_SESSION['alert'] = "account successfully created";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>