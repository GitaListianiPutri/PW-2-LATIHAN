<?php

// membuat class mahasiswa
class Mahasiswa {
    // properti nama dengan access modifier public
    public  $nama;
    // properti nim dengan acc mod protected 
    // protected : tidak bisa dipanggil diluar kelasnya, tetapi bisa dipanggil di class turunannya/inheritance
    private $nim = "220102010";
        // public method
    public function tampilkan_nama(){
        // nilai kembalian
        return "Nama saya Gita Listiani Putri";
    }

    // membuat protected method 
     function tampilkan_nim (){
        return "NIM saya" .$this->nim;
    }
    }
// instansiasi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new Mahasiswa ();
// membuat objek
$nim = new Mahasiswa();
// menampilkan method tempilkan nama
echo $mahasiswa->tampilkan_nama(). "<br>";
echo $nim->tampilkan_nim();

?>