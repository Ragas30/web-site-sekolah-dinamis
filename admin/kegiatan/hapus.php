<?php
include('../koneksi.php');

if (isset($_GET['id_kegiatan']))
    $id_kegiatan = $_GET['id_kegiatan'];

$hapus = mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id_kegiatan='$id_kegiatan'");
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
