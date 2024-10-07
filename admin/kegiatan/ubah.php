<?php
include "../layout/header.php";
include "../layout/navbar.php";
include "../koneksi.php";

$id_kegiatan = $_GET['id_kegiatan'];
$search = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'");
$item = mysqli_fetch_array($search);
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
                            <h5 class="m-b-10">Edit Data</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../home/index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="index.php">kegiatan</a></li>
                            <li class="breadcrumb-item"><a href="ubah.php">Edit data</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>EDIT DATA</h5>
                </div>
                <div class="card-body">
                    <form action="proses_ubah.php?id_kegiatan=<?= $id_kegiatan ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Judul</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Masukan Email" value="<?= $item['judul'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" placeholder="Masukan Password" value="<?= $item['keterangan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Up Foto</label><br>
                                    <img src="../assets/images/kegiatan/<?= $item['foto'] ?>" width="100px" alt="">
                                    <input type="hidden" name="foto_lama" value="<?= $item['foto'] ?>">
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary rounded">Submit</button>
                                </div>
                            </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
    <!-- [ Main Content ] end -->

    <?php include "../layout/footer.php"; ?>