<?php
include "../koneksi.php";
$nis = $_GET['nis'];
$siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
$data_siswa = mysqli_fetch_array($siswa);
$jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
if(isset($_POST['tombol_update'])){
    $nis = $_POST['nis'];
    $no_absen = $_POST['no_absen'];
    $nama_siswa = $_POST['nama_siswa'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $id_jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];

    mysqli_query($koneksi,"UPDATE siswa SET nis='$nis', no_absen='$no_absen', nama_siswa='$nama_siswa', no_telp='$no_telp', email='$email', id_jurusan='$id_jurusan', kelas='$kelas', angkatan='$angkatan' WHERE nis='$nis'");
    echo "<script>alert('berhasil update data'); window.location.href='halaman_utama.php?page=siswa'</script>";
}
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?=$data_siswa['nis']?>">
    <div>
        <input type="number" class="form-control" id="floatingInput" placeholder="NIS" name="nis" value="<?=$data_siswa['nis']?>" required>
        <label for="floatingInput">NIS</label>
    </div>
    <div>
        <input type="number" class="form-control" id="floatingInput" placeholder="No Absen" name="no_absen" value="<?=$data_siswa['no_absen']?>" required>
        <label for="floatingInput">No Absen</label>
    </div>
    <div>
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Siswa" name="nama_siswa" value="<?=$data_siswa['nama_siswa']?>" required>
        <label for="floatingInput">Nama Siswa</label>
    </div>
    <div>
        <input type="text" class="form-control" id="floatingInput" placeholder="No Telephone" name="no_telp" value="<?=$data_siswa['no_telp']?>" required>
        <label for="floatingInput">No Telephone</label>
    </div>
    <div>
        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" value="<?=$data_siswa['email']?>" required>
        <label for="floatingInput">Email</label>
    </div>
    <select name="jurusan">
        <?php
        while($data = mysqli_fetch_array($jurusan)){
        ?>
        <option value="<?=$data['id_jurusan']?>" <?php if ($data['id_jurusan'] == $data_siswa['id_jurusan']){echo "selected";}?>><?=$data['jurusan']?></option>
        <?php
        }
        ?>
    </select>
    <div>
        <input type="number" class="form-control" id="floatingInput" placeholder="Kelas" name="kelas" value="<?=$data_siswa['kelas']?>" required>
        <label for="floatingInput">Kelas</label>
    </div>
    <div>
        <input type="number" class="form-control" id="floatingInput" placeholder="Angkatan" name="angkatan" value="<?=$data_siswa['angkatan']?>" required>
        <label for="floatingInput">Angkatan</label>
    </div>
    <input type="submit" name="tombol_update" class="btn btn-warning" value="update">
</form>
