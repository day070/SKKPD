<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">skkpd</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['page'] == "siswa") {
                                                echo 'active';
                                            } else {
                                                echo '';
                                            } ?>"
                            aria-current="page" href="halaman_utama.php?page=siswa">Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <?php
    switch ($_GET['page']) {

        case "coba":
            include "coba.php";
            break;
        case "siswa":
            include "siswa.php";
            break;
        case "pegawai":
            include "pegawai.php";
            break;
        case "kategori":
            include "kategori.php";
            break;
        case "kegiatan":
            include "kegiatan.php";
            break;
        case "tambah_siswa":
            include "../tambah/tambah_siswa_select.php";
            break;
        case "tambah_pegawai":
            include "../tambah/tambah_pegawai.php";
            break;
        case "ubah_siswa":
            include "../ubah/ubah_siswa.php";
            break;
        case "ubah_pegawai":
            include "../ubah/ubah_pegawai.php";
            break;
        default:
            echo "error 404 file tidak ditemukan";
            break;
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>