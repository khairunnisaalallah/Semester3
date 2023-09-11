<?php
// Matriks A
$matrixA = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B
$matrixB = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Inisialisasi matriks hasil dengan nol
$matrixResult = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

// Melakukan penjumlahan matriks A dan B
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matrixResult[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
}

// Menampilkan hasil penjumlahan
echo "Hasil Penjumlahan Matriks A dan B:<br/ >";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrixResult[$i][$j] . " ";
    }
    echo "<br/> >";
}
?>
        