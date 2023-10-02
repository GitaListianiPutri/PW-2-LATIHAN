<?php

// membuat class
class Mahasiswa {
    // membuat properti dari mahasiswa
    var $nim;
    var $nama;
    var $alamat;

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
// membuat objek dari class mahasiswa
}

$nama_mahasiswa = new Mahasiswa();
$alamat_mhs = new Mahasiswa();
$nim_mhs = new Mahasiswa();
// menampilkan
echo "MEMBUAT OBJEK DARI CLASS MAHASISWA <br>";
echo $nama_mahasiswa->tampil_nama(). "<br>";
echo $alamat_mhs->tampil_alamat(). "<br>";
echo $nim_mhs->tampil_nim(). "<br>";


class Dosen{
    // properti
    var $nidn;
    var $nama;
    var $prodi;
    // method untuk menampilkan nidn
    function tampil_nidn(){
        return "NIDN saya 220102010";
    }
    // 
    function tampil_namaa(){
        return "Nama saya Gita Listiani Putri";
    }
    function tampil_prodi(){
        return "Prodi saya Teknik Informatika";
    }
}
// membuat objek dari class mahasiswa
 $nidn_dsn = new Dosen();
 $nama_dsn = new Dosen();
 $prodi_dsn = new Dosen();

// menampilkan
echo "MEMBUAT OBJEK DARI CLASS DOSEN <br>";
echo $nidn_dsn->tampil_nidn(). "<br>";
echo $nama_dsn->tampil_namaa(). "<br>";
echo $prodi_dsn->tampil_prodi(). "<br>";
?>