<?php
include ("../koneksi.php");
if (isset($_POST['tombol_tambah'])) {

    $nama_lengkap   = $_POST['nama_lengkap'];
    $username       = $_POST['username'];

    $hasil = mysqli_query($koneksi, "INSERT INTO pegawai VALUES('$nama_lengkap', '$username')");

    if (!$hasil) {
        echo "<script>alert('gagal memasukkan data siswa');window.location.href='halaman_utama.php?page=tambah_siswa'</script>";
    } else {
        echo "<script>alert('berhasil memasukkan data siswa');window.location.href='halaman_utama.php?page=coba'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <form action="" method="post">

        <div>
            <input type="text" placeholder="Kategori" name="kategori" autocomplete="off">
            <label for="floatingInput">Kategori</label>
        </div>

        <div>
            <input type="text" placeholder="Masukan Usernama" name="username" autocomplete="off">
            <label for="floatingInput">Username</label>
        </div>
        <input type="submit" name="tombol_tambah" class="btn btn-success" id="" value="simpan">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>