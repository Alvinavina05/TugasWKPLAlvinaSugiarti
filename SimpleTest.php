<?php
use PHPUnit\Framework\TestCase;
// use di gunakan untuk mengimpor Framework dari PHPUnit, yang di impor adalah testcase. TestCase adalah kelas dasar yang digunakan untuk membuat unit test dalam PHPUnit.

require_once "Wordcount.php";
// require_once digunakan untuk mengimpor atau memasukkan file Wordcount.php yang berisi definisi kelas Wordcount. Dengan ini, Anda membuat definisi kelas Wordcount tersedia untuk digunakan dalam pengujian.

class SimpleTest extends TestCase
{
    // class ini di gunakan untuk mendefinisikan kelas SimpleTest yang menggantungkan pada TestCase dari PHPUnit

    public function testCountWords()
    {
        // Mendefinisikan metode testCountWords yang akan melakukan pengujian

        $Wc = new WordCount();
        // Membuat objek baru dari kelas WordCount untuk diuji

        $TestSentence = "My name is Vina"; 
        // Menentukan kalimat uji yang akan digunakan dalam pengujian

        $WordCount = $Wc->countWords($TestSentence);
        // Memanggil metode countWords dari objek WordCount dan menyimpan hasil penghitungan dalam variabel WordCount

        $this->assertEquals(4, $WordCount);
        // Menggunakan asserEquals dari TestCase untuk memeriksa apakah hasil penghitungan sesuai dengan yang diharapkan. Dalam hal ini, menguji apakah jumlah kata dalam kalimat sesuai dengan 4. Jika benar, pengujian akan berhasil; jika salah, akan menghasilkan kesalahan.

        // Hasil pengujian akan ditentukan apakah metode countWords berfungsi dengan benar sesuai dengan harapan atau tidak.
    }
}