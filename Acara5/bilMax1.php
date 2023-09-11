<?php
function max_of_two_numbers($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

// Contoh penggunaan:
$bilangan1 = 100;
$bilangan2 = 150;
$terbesar = max_of_two_numbers($bilangan1, $bilangan2);
echo "Bilangan terbesar adalah: " . $terbesar;
?>