<?php
include ("../koneksi.php");
if (isset($_POST['tombol_tambah'])) {

    $id_jurusan   = $_POST['id_jurusan'];
    $jurusan       = $_POST['jurusan'];

    $hasil = mysqli_query($koneksi, "INSERT INTO jurusan VALUES('$id_jurusan', '$username')");

    if (!$hasil) {
        echo "<script>alert('gagal memasukkan data jrusan');window.location.href='halaman_utama.php?page=tambah_jurusan'</script>";
    } else {
        echo "<script>alert('berhasil memasukkan data jurusan');window.location.href='halaman_utama.php?page=jurusan'</script>";
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
            <input type="text" placeholder="ID Jurusan" name="id_jurusan" autocomplete="off">
            <label for="floatingInput">ID Jurusan</label>
        </div>

        <div>
            <input type="text" placeholder="Masukan Nama Jurusan" name="jurusan" autocomplete="off">
            <label for="floatingInput">Jurusan</label>
        </div>
        <input type="submit" name="tombol_tambah" class="btn btn-success" id="" value="simpan">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>