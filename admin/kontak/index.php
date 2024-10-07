<?php
include "../layout/header.php";
include "../layout/navbar.php";
?>

<section class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Table List Contact Us</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Daftar Masuk Contact Us</a></li>
                            <li class="breadcrumb-item"><a href="#!">Basic Tables</a></li>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../koneksi.php";
                                    $no = 1;
                                    $user = mysqli_query($koneksi, "SELECT * FROM contactus ORDER BY id DESC");
                                    while ($item = mysqli_fetch_array($user)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td><?= $item['email']; ?></td>
                                            <td><?= $item['subject']; ?></td>
                                            <td><?= $item['message']; ?></td>
                                            <td>
                                                <a class="btn btn-warning" href="ubah.php?id=<?php echo $item['id']; ?>">Ubah</a>
                                                <a class="btn btn-danger" href="hapus.php?id=<?php echo $item['id']; ?>">Hapus</a>
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