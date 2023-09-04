<?php
// membuat contoh login
$namaAkunAsli = "admin";
$passwordAsli = "admin1234";

//save data input login
$namaAkunInput = $_POST ["nama_pengguna"];
$passwordInput = $_POST ["password"];

//konfirmasi data login
if ($namaAkunInput == $namaAkunAsli && $passwordInput == $passwordAsli) {
    echo "Selamat Datang, $namaAkunAsli! Anda berhasil login. ";
} else {
    echo "Nama pengguna atau kata sandi salah. Silahkan coba lagi. ";
}
?>