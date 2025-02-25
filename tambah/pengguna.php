<?php
include ("../koneksi.php");
if (isset($_POST['tombol_tambah'])) {

    $username   = $_POST['username'];
    $nis       = $_POST['nis'];
    $password  = $_POST['password'];
    $enkrip = password_hash($password, PASSWORD_DEFAULT);

    $hasil = mysqli_query($koneksi, "INSERT INTO pengguna VALUES(NULL, '$username','$nis', '$password')");

    if (!$hasil) {
        echo "<script>alert('gagal memasukkan data Pengguna');window.location.href='halaman_utama.php?page=tambah_pengguna'</script>";
    } else {
        echo "<script>alert('berhasil memasukkan data Pengguna');window.location.href='halaman_utama.php?page=pengguna'</script>";
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
            <input type="text" placeholder="Masukan Username" name="username" autocomplete="off">
            <label for="floatingInput">Username</label>
        </div>

        <div>
            <input type="text" placeholder="Masukan NIS" name="nis" autocomplete="off">
            <label for="floatingInput">NIS</label>
        </div>
        <div>
            <input type="text" placeholder="Masukan Password" name="password" autocomplete="off">
            <label for="floatingInput">Password</label>
        </div>
        <input type="submit" name="tombol_tambah" class="btn btn-success" id="" value="simpan">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>

</html>