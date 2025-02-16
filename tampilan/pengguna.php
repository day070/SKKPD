<?php
if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    include "../koneksi.php";
    $hasil = mysqli_query($koneksi, "DELETE FROM siswa WHERE nis ='$nis'");
    if (!$hasil) {
        echo "<script>alert('Gagal Menghapus');window.location.href='halaman_utama.php?page=siswa'</script>";
    } else {
        echo "<script>alert('Berhasil Menghapus');window.location.href='halaman_utama.php?page=siswa'</script>";
    }
}
?>

<div>
    <a href="halaman_utama.php?page=tambah_siswa" class="btn btn-success float-end">+ Tambah</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">nis</th>
                <th scope="col">no absen</th>
                <th scope="col">nama siswa</th>
                <th scope="col">no telp</th>
                <th scope="col">email</th>
                <th scope="col">jurusan</th>
                <th scope="col">kelas</th>
                <th scope="col">angkatan</th>
                <th scope="col" colspan="2">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $no = 1;
            $data_siswa = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN jurusan USING(id_jurusan) ORDER BY nis ASC");
            while ($data = mysqli_fetch_assoc($data_siswa)) {
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $data['nis'] ?></td>
                    <td><?= $data['no_absen'] ?></td>
                    <td><?= $data['nama_siswa'] ?></td>
                    <td><?= $data['no_telp'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['jurusan'] ?></td>
                    <td><?= $data['kelas'] ?></td>
                    <td><?= $data['angkatan'] ?></td>
                    <td><a href="halaman_utama.php?page=ubah_siswa&nis=<?= $data['nis'] ?>" class="btn btn-warning">Update</a></td>
                    <td><a href="halaman_utama.php?page=siswa&nis=<?= $data['nis'] ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus data siswa?')">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
