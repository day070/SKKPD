<?php
if(isset($_POST['tombol_tambah'])){

    $nis            = $_POST['nis'];
    $no_absen       = $_POST['no_absen'];
    $nama_siswa     = $_POST['nama_siswa'];
    $no_telp        = $_POST['no_telp'];
    $email          = $_POST['email'];
    $id_jurusan     = $_POST['jurusan'];
    $kelas          = $_POST['kelas'];
    $angkatan       = $_POST['angkatan'];

    $hasil = mysqli_query($koneksi, "INSERT INTO siswa VALUES('$nis', '$no_absen', '$nama_siswa', '$no_telp', '$email', '$id_jurusan', '$kelas', '$angkatan')");

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
        <input type="text" placeholder="nis" name="nis" autocomplete="off">
        <label for="floatingInput">nis</label>
    </div>

    <div>
        <input type="text" placeholder="no absen" name="no_absen" autocomplete="off">
        <label for="floatingInput">no absen</label>
    </div>

    <div>
        <input type="text" placeholder="nama siswa" name="nama_siswa" autocomplete="off">
        <label for="floatingInput">nama siswa</label>
    </div>

    <div>
        <input type="text" placeholder="no telephone" name="no_telp" autocomplete="off">
        <label for="floatingInput">no telephone</label>
    </div>

    <div>
        <input type="email" placeholder="email" name="email" autocomplete="off">
        <label for="floatingInput">email</label>
    </div>

    <select name="jurusan">
        <option>pilih jurusan</option>
        <?php
            include "../koneksi.php";
            $list = mysqli_query($koneksi, "SELECT * FROM jurusan");
            while($data = mysqli_fetch_assoc($list)){
        ?>
        <option value="<?= $data['id_jurusan']; ?>"><?= $data['jurusan']; ?></option>
        <?php
            }
        ?>
    </select>

    <div>
        <input type="number" placeholder="kelas" name="kelas" autocomplete="off">
        <label for="floatingInput">kelas</label>
    </div>

    <div>
        <input type="number" placeholder="angkatan" name="angkatan" autocomplete="off">
        <label for="floatingInput">angkatan</label>
    </div>

    <input type="submit" name="tombol_tambah" class="btn btn-success" id="" value="simpan">

</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>

