<?php 

class Wordcount
{
    // class wordcount adalah  untuk Mendefinisikan kelas Wordcount

    public function countWords($sentence)
    {
        // ini untuk Mendefinisikan metode publik bernama countWords dengan satu parameter $sentence

        return count(explode(" ", $sentence));
        // ini untuk Menghitung jumlah kata dalam $sentence
        // jadi fungsi explode() digunakan untuk memisahkan kalimat menjadi array berdasarkan spasi (' ').
        // dan fungsi count() digunakan untuk menghitung jumlah elemen dalam array yang dihasilkan oleh explode().
        // lalu Jumlah elemen dalam array akan menggambarkan jumlah kata dalam kalimat.
    }
}
?>