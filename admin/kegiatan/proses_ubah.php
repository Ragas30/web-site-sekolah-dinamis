<?php
include "../koneksi.php";

$id_kegiatan = $_GET['id_kegiatan'];
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];

if ($_FILES['foto']['name'] == '') {
    // Jika tidak ada file yang diunggah, gunakan foto lama
    $nama_file = $_POST['foto_lama'];
} else {
    // Ambil data file
    $nama_file   = $_FILES['foto']['name'];
    $nama_sementara = $_FILES['foto']['tmp_name'];
    // Pindahkan file
    $terupload = move_uploaded_file($nama_sementara, '../assets/images/kegiatan/' . $nama_file);
    if (!$terupload) {
        // Jika file gagal diunggah, tampilkan pesan kesalahan dan hentikan eksekusi
        echo "<script>
        alert('File gagal diunggah');
        window.location.href='ubah.php';
        </script>";
        exit();
    }
}

$update = mysqli_query($koneksi, "UPDATE kegiatan SET judul='$judul', keterangan='$keterangan',foto='$nama_file' WHERE id_kegiatan='$id_kegiatan'");

if ($update) {
    echo "<script>
        alert('Data berhasil diupdate');
        window.location.href='index.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal diupdate');
        window.location.href='ubah.php';
    </script>";
}
