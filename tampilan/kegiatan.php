<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../design/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
   <?php include("../components/up_nav.php") ?>
    <div id="layoutSidenav">
        <?php include("../components/navbar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <a href="halaman_utama.php?page=tambah_kegiatan" class="btn btn-success float-end">+ Tambah</a>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Kegiatan</th>
                                        <th scope="col">Angka Kredit</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col" colspan="2">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../koneksi.php";
                                    $no = 1;
                                    $data_siswa = mysqli_query($koneksi, "SELECT * FROM kegiatan INNER JOIN kategori USING(id_kategori) ORDER BY id_kategori ASC");
                                    while ($data = mysqli_fetch_assoc($data_siswa)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $data['jenis_kegiatan'] ?></td>
                                            <td><?= $data['angka_kredit'] ?></td>
                                            <td><?= $data['kategori'] ?></td>
                                            <td><a href="halaman_utama.php?page=ubah_kegiatan&id_kegiatan=<?= $data['id_kegiatan'] ?>" class="btn btn-warning">Update</a></td>
                                            <td><a href="halaman_utama.php?page=kegiatan&id_kegiatan=<?= $data['id_kegiatan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus data siswa?')">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
</body>

</html>