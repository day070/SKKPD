<?php
include "../koneksi.php";
$id_kegiatan = $_GET['id_kegiatan'];
$kegiatan = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id_kegiatan='$id_kegiatan'");
$data_kegiatan = mysqli_fetch_array($kegiatan);
$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

if(isset($_POST['tombol_update'])){
    $id_kegiatan = $_POST['id_kegiatan'];
    $no_absen = $_POST['no_absen'];
    $nama_siswa = $_POST['nama_siswa'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $id_jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $angkatan = $_POST['angkatan'];

    mysqli_query($koneksi,"UPDATE kegiatan SET id_kegiatan='$id_kegiatan', no_absen='$no_absen', nama_siswa='$nama_siswa', no_telp='$no_telp', email='$email', id_jurusan='$id_jurusan', kelas='$kelas', angkatan='$angkatan' WHERE id_kegiatan='$id_kegiatan'");
    echo "<script>alert('berhasil update data'); window.location.href='halaman_utama.php?page=siswa'</script>";
}
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?=$data_kegiatan['id_kegiatan']?>">
    <div>
        <label for="floatingInput">Id_Kegiatan</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="id_kegiatan" name="id_kegiatan" value="<?=$data_kegiatan['id_kegiatan']?>" required>
    </div>
    <div>
        <label for="floatingInput">Jenis Kegiatan</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="Jenis Kegiatan" name="jenis_kegiatan" value="<?=$data_kegiatan['jenis_kegiatan']?>" required>
    </div>
    <div>
        <label for="floatingInput">Angka Kredit</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="Angka Kredit" name="angka_kredit" value="<?=$data_kegiatan['angka_kredit']?>" required>
    </div>
    <select name="kategori">
        <?php
        while($data = mysqli_fetch_array($kategori)){
        ?>
        <option value="<?=$data['kategori']?>" <?php if ($data['kategori'] == $data_kegiatan['id_kategori']){echo "selected";}?>><?=$data['kategori']?></option>
        <?php
        }
        ?>
    </select>
    <div>
        <label for="floatingInput">Kategori</label>
        <input type="number" class="form-control" id="floatingInput" placeholder="Kategori" name="kategori" value="<?=$data_kegiatan['kategori']?>" required>
    </div>
    <div>
        <input type="number" class="form-control" id="floatingInput" placeholder="Angkatan" name="angkatan" value="<?=$data_kegiatan['angkatan']?>" required>
        <label for="floatingInput">Angkatan</label>
    </div>
    <input type="submit" name="tombol_update" class="btn btn-warning" value="update">
</form>
