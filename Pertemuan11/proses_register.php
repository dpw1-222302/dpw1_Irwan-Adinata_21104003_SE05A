<?php
//Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Lakukan operasi penyimpanan data ke database
    require_once('connect.php');
    //Query untuk menyimpan data pengguna baru ke tabel pengguna
    //Buat query untuk memasukan data user yang tadi diinputkan
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO user VALUES (NULL,2, '$nama_lengkap', '$no_hp', '$email', '$password')";
    if ($conn->query($query) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    //Tutup koneksi database
    $conn->close();
}
