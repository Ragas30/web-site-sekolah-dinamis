<?php
include "../koneksi.php";
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];


$nama_file   = $_FILES['foto']['name'];
$nama_sementara = $_FILES['foto']['tmp_name'];

$terupload = move_uploaded_file($nama_sementara, '../assets/images/kegiatan/' . $nama_file);

$tambah = mysqli_query($koneksi, "INSERT INTO kegiatan (judul,keterangan,foto) 
VALUES ('$judul','$keterangan','$nama_file')");

if ($tambah) {
    echo "<script>
    alert('Data Berhasil Di tambahkan')
    window.location.href='index.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal di tambah')
    window.location.href='tambah.php'
    </script>";
}
