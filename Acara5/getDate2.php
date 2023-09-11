<?php
$today = getdate();

$tanggal = $today['mday'];    // Mengambil tanggal (day)
$bulan = $today['mon'];       // Mengambil bulan (month)
$tahun = $today['year'];      // Mengambil tahun (year)

// Format tanggal, bulan, dan tahun sesuai keinginan Anda
$tanggal_format = sprintf("%02d-%02d-%04d", $tanggal, $bulan, $tahun);

echo "Tanggal, bulan, dan tahun sekarang: " . $tanggal_format;
?>
