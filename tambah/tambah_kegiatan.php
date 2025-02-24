<?php
include "../koneksi.php";
if(isset($_POST['tombol_tambah'])){

    $id_kegiatan            = $_POST['id_kegiatan'];
    $jenis_kegiatan       = $_POST['jenis_kegiatan'];
    $angka_kredit     = $_POST['angka_kredit'];
    $id_kategori     = $_POST['kategori'];

    $hasil = mysqli_query($koneksi, "INSERT INTO kegiatan VALUES('$id_kegiatan', '$jenis_kegiatan', '$angka_kredit', '$id_kategori')");

    if(!$hasil){
        echo "<script>alert('gagal memasukkan data siswa');window.location.href='halaman_utama.php?page=tambah_siswa'</script>";
    }else{
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
        <input type="text" placeholder="id_kegiatan" name="id_kegiatan" autocomplete="off">
        <label for="floatingInput">id_kegiatan</label>
    </div>

    <div>
        <input type="text" placeholder="no absen" name="jenis_kegiatan" autocomplete="off">
        <label for="floatingInput">Jenis Kegiatan</label>
    </div>

    <div>
        <input type="text" placeholder="Angka Kredit" name="angka_kredit" autocomplete="off">
        <label for="floatingInput">Angka Kredit</label>
    </div>

    <select name="kategori">
        <option>pilih kategori</option>
        <?php
            include "../koneksi.php";
            $list = mysqli_query($koneksi, "SELECT * FROM kategori");
            while($data = mysqli_fetch_assoc($list)){
        ?>
        <option value="<?= $data['id_kategori']; ?>"><?= $data['kategori']; ?></option>
        <?php
            }
        ?>
    </select>

<div></div>
    <input type="submit" name="tombol_tambah" class="btn btn-success" id="" value="simpan">

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>

