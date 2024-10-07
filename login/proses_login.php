<?php

include "../koneksi.php";


$email = $_POST['email'];
$password = $_POST['password'];


$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' AND password='$password'");


if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);


    session_start();


    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['email'] = $data['email'];


    echo "<script>
    alert('Login berhasil');
    window.location.href='../admin/home/index.php'; 
    </script>";
} else {

    echo "<script>
    alert('Email atau password salah');
    window.location.href='login.php'; 
    </script>";
}
