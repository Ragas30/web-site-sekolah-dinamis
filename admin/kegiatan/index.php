<?php
include "../layout/header.php";
include "../layout/navbar.php";
?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Kegiatan Table</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Berita</a></li>
                            <li class="breadcrumb-item"><a href="#!">Input Berita</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../koneksi.php";
                                    $no = 1;
                                    $user = mysqli_query($koneksi, "SELECT * FROM kegiatan ORDER BY id_kegiatan DESC");
                                    while ($item = mysqli_fetch_array($user)) {
                                    ?>
                                        <tr class="items-center flex">
                                            <td><?= $no++; ?></td>
                                            <td><?= $item['judul']; ?></td>
                                            <td><?= $item['keterangan']; ?></td>
                                            <td><img src="../assets/images/kegiatan/<?= $item['foto'] ?>" width="100px"=""></td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" href="ubah.php?id_kegiatan=<?php echo $item['id_kegiatan']; ?>">Ubah</a>
                                                <a class="btn btn-danger btn-sm" href="hapus.php?id_kegiatan=<?php echo $item['id_kegiatan']; ?>">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
<?php
include "../layout/footer.php";
?>