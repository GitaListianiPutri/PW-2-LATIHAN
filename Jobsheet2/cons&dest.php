<?php

// membuat class
class Mahasiswa {
    // membuat properti dari mahasiswa
    var $nim;
    var $nama;
    var $alamat;

    // membuat construct, construct akan dieksekusi pertama kali
    function __construct(){
        echo "Saya Mahasiswa Teknik Informatika <br>";
        echo "Nama saya Gita Listiani Putri <br>";
    }
    // membuat destruct 
    function __destruct(){
        echo "Politeknik Negeri Cilacap <br>";
    }

    // method untuk menampilkan nim
function tampil_nim(){
    return "NIM saya 220102010";
}
// method untuk menampilkan nama
function tampil_nama(){
    return "Nama saya Gita Listiani Putri";
}
// method untuk menampilkan alamat
function tampil_alamat(){
    return "Alamat saya di Jalan Lingkar Selatan";
}
function tampil_mahasiswa(){
    return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
}
}
// membuat objek dari class mahasiswa
$nama_mahasiswa = new Mahasiswa();
// menampilkan objek
echo $nama_mahasiswa->tampil_mahasiswa(). "<br>";


 ?>