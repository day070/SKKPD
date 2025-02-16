<?php
if (isset($_GET['id_kegiatan'])) {
    $id_kegiatan = $_GET['id_kegiatan'];
    include "../koneksi.php";
    $hasil = mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id_kegiatan ='$id_kegiatan'");
    if (!$hasil) {
        echo "<script>alert('Gagal Menghapus');window.location.href='halaman_utama.php?page=kegiatan'</script>";
    } else {
        echo "<script>alert('Berhasil Menghapus');window.location.href='halaman_utama.php?page=kegiatan'</script>";
    }
}
?>

<div>
    <a href="halaman_utama.php?page=tambah_siswa" class="btn btn-success float-end">+ Tambah</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Kegiatan</th>
                <th scope="col">Angka Kredit</th>
                <th scope="col">Kategori</th>
                <th scope="col" colspan="2">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $no = 1;
            $data_siswa = mysqli_query($koneksi, "SELECT * FROM kegiatan INNER JOIN kategori USING(id_kategori) ORDER BY id_kategori ASC");
            while ($data = mysqli_fetch_assoc($data_siswa)) {
            ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $data['jenis_kegiatan'] ?></td>
                    <td><?= $data['angka_kredit'] ?></td>
                    <td><?= $data['kategori'] ?></td>
                    <td><a href="halaman_utama.php?page=ubah_kegiatan&id_kegiatan=<?= $data['id_kegiatan'] ?>" class="btn btn-warning">Update</a></td>
                    <td><a href="halaman_utama.php?page=kegiatan&id_kegiatan=<?= $data['id_kegiatan'] ?>" class="btn btn-danger" onclick="return confirm('Apakah yakin menghapus data siswa?')">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
