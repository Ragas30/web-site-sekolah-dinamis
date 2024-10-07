<?php
include('../koneksi.php');

if (isset($_GET['id_berita']))
    $id_berita = $_GET['id_berita'];

$hapus = mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id_berita'");
if ($hapus) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href='index.php';
        </script>";
} else {
    echo "<script>  
            alert('Data gagal dihapus');
            window.location.href='index.php';
        </script>";
}
