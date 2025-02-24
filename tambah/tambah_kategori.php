<?php
include "../koneksi.php";
if (isset($_POST['tombol_tambah'])) {

    $id_kategori            = $_POST['id_kategori'];
    $kategori       = $_POST['kategori'];
    $sub_kategori     = $_POST['sub_kategori'];

    $hasil = mysqli_query($koneksi, "INSERT INTO kategori VALUES('$id_kategori', '$kategori', '$sub_kategori')");

    if (!$hasil) {
        echo "<script>alert('gagal memasukkan data siswa');window.location.href='halaman_utama.php?page=tambah_siswa'</script>";
    } else {
        echo "<script>alert('berhasil memasukkan data siswa');window.location.href='halaman_utama.php?page=siswa'</script>";
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
            <input type="text" placeholder="id_kategori" name="id_kategori" autocomplete="off">
            <label for="floatingInput">id_kategori</label>
        </div>

        <div>
            <label>kategori</label><br>
            <input type="radio" name="kategori" value="Wajib">
            <label for="html">Wajib</label><br>
            <input type="radio" name="kategori" value="Opsional">
            <label for="html">Opsional</label><br>
        </div>

        <div>
            <input type="text" placeholder="Sub kategori" name="sub_kategori" autocomplete="off">
            <label for="floatingInput">Sub Kategori</label>
        </div>

        <input type="submit" name="tombol_tambah" class="btn btn-success" id="" value="simpan">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>