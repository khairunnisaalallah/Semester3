<?php
// Data login sederhana dalam bentuk array
$dataLogin = [
    'user123' => 'password123',
    'john_doe' => 'secret123',
    'jane_smith' => '12345'
];

// Simpan input dari form login
$namaPenggunaInput = $_POST['nama_pengguna'];
$kataSandiInput = $_POST['kata_sandi'];

// Periksa apakah nama pengguna ada dalam data login dan kata sandi sesuai
if (array_key_exists($namaPenggunaInput, $dataLogin) && $dataLogin[$namaPenggunaInput] == $kataSandiInput) {
    echo "Selamat datang, $namaPenggunaInput! Anda berhasil login.";
} else {
    echo "Nama pengguna atau kata sandi salah. Silakan coba lagi.";
}
?>
