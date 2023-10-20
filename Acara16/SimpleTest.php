<?php // jangan lupa untuk membuat awalan php
//Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
//butuh framework phpunit
use PHPUnit\Framework\TestCase;
require_once "WordCount.php";
//membuat class SimpleTest
//buat impor berkas WordCount.php yg isinya definisi WordCount
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        //pakai class yg mau kita test./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
        $Wc = new WordCount();
        //kita membuat instance dari kelas WordCount. Instance pembuatann objek dari suatu class


        //masukkan parameter 4 kata, yg harusnya dapt output 4
        $TestSentence = "My name is Nisa"; // 4 kata 
        //jadi kita siapkan kalimat atau parameter yang bisa dihitung jumlah katanya. misalnya kata nya ada 5 , atau 6
        $WordCount = $Wc->countWords($TestSentence);
        //terus kita panggil metode countWords dg kalimat sebagai parameter
        //countWords adalah metode fungsi PHP yang dipanggil untuk menghitung kata dalam suatu kalimat

        //assert equal, ekspetasi nya harus 4 , jika benar maka berfungsi
        $this->assertEquals(4, $WordCount);
        // nah diatas adalah hasilnya. harus sesuai dengan kata diatas yang diharapkan. jika 4 kalimat maka tulis 4
        // jika ada 5 maka tulis 5. Jika kita membuat kalimat atau parameter dengan 7 kata, tpi kita menulis disini
        // kurang atau lebih maka akan eror. karena jumlah kata yang ditulis harus sesuai.

    }
}
?> // sebagai penutup PHP