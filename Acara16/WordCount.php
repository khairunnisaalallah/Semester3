<?php //awalan php
//file: WordCount.php
class WordCount
// pertama kita membuat class WordCount
{
    public function countWords ($sentence)
    // hanya menerima 1 parameter , yaitu $sentence
    // metode ini yg akan menghitung jumlah kata dalam kalimat atau parameter
    {
    // akan mengambil jumlah kata sebagai hasil
        return count(explode(" ", $sentence));
    // adalah fungsi yang digunakan untuk memecah sebuah string menjadi beberapa elemen dalam bentuk array
    // berdasarkan pemisahnya. misalnya diatas pemisahnya adalah " "

    }
}
?> // penutup php