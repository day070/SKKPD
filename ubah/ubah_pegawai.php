<?php
include "../koneksi.php";
$username = $_GET['username'];
$pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE username='$username'");
$data_pegawai = mysqli_fetch_assoc($pegawai);
if(isset($_POST['tombol_update'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];

    mysqli_query($koneksi,"UPDATE pegawai SET nama_lengkap='$nama_lengkap',username='$username' WHERE username='$username'");
    echo "<script>alert('berhasil update data'); window.location.href='halaman_utama.php?page=pegawai'</script>";
}
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?=$data_pegawai['username']?>">
    <div>
        <label for="floatingInput">Nama Lengkap</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Lengkap" name="nama_lengkap" value="<?=$data_pegawai['nama_lengkap']?>" required>
    </div>
    <div>
        <label for="floatingInput">Username</label>
        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="<?=$data_pegawai['username']?>" required>
    </div>
    <input type="submit" name="tombol_update" class="btn btn-warning" value="update">
</form>
