<?php
include "koneksi.php";

if(isset($_POST['tombol_login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    $cek_operator = mysqli_query($koneksi, "SELECT username, password FROM pengguna WHERE username='$user'");
    $data_operator = mysqli_fetch_assoc($cek_operator);
    
    $cek_siswa = mysqli_query($koneksi, "SELECT nis, password FROM pengguna WHERE nis='$user'");
    $data_siswa = mysqli_fetch_assoc($cek_siswa);
    
    $cek_enkrip = password_hash($pass, PASSWORD_DEFAULT);
    
    if(mysqli_num_rows($cek_operator) > 0){
        if(password_verify($pass, $data_operator['password'])){
            $user_operator = $data_operator['username'];
            $nama_operator = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT nama_lengkap FROM pegawai WHERE username = '$user_operator'"));
            setcookie('username', $data_operator['username'], time() + (60 * 60 * 24 * 7), '/');
            setcookie('nama_lengkap', $nama_operator['nama_lengkap'], time() + (60 * 60 * 24 * 7), '/');
            setcookie('level_user', 'operator', time() + (60 * 60 * 24 * 7), '/');
            echo "<script>alert('Berhasil Login');window.location.href='tampilan/halaman_utama.php?page=pegawai'</script>";
        }else{
            echo "<script>alert('Gagal Login, Password Salah');window.location.href='login.php'</script>";
        }
    }elseif(mysqli_num_rows($cek_siswa) > 0){
        if(password_verify($pass, $data_siswa['password'])){
            $user_siswa = $data_siswa['nis'];
            $nama_siswa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT nama_siswa FROM siswa WHERE nis = '$user_siswa'"));
            setcookie('nis', $data_siswa['nis'], time() + (60 * 60 * 24 * 7), '/');
            setcookie('level_user', 'siswa', time() + (60 * 60 * 24 * 7), '/');
            setcookie('nama_lengkap', $nama_siswa['nama_siswa'], time() + (60 * 60 * 24 * 7), '/');
            echo "<script>alert('Berhasil Login');window.location.href='tampilan/halaman_utama.php?page=siswa'</script>";
        }else{
            echo "<script>alert('Gagal Login, Password Salah');window.location.href='login.php'</script>";
        }
    }else{
        echo "<script>alert('Gagal Login, username atau password salah');window.location.href='login.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="form-floating mb-3 mt-5">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" autocomplete="off">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com" name="password" autocomplete="off">
                        <label for="floatingInput">Password</label>
                    </div>
                    <input type="submit" name="tombol_login" class="btn btn-success" value="Login" style="float:right">
                </div>
                <div class="col"></div>
            </div>
        </div>
    </form>
    <script src="bootstrap/bootstrap.js"></script>
</body>
</html>
