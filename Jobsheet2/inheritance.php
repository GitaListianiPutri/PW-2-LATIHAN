<?php
 class Manusia {
    // properti
    public $nama_saya;

// method
    function panggil_nama($saya){
        $this->nama_saya=$saya;
    }
 }

// membuat class turunan dari class mahasiswa
 class Mahasiswa extends Manusia {
    // proerti 
    public $nama_mahasiswa;

    // method
    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa=$mahasiswa;
    }
 }
// instansiasi class mahasiswa
$name_mhs = new Mahasiswa ();

// memanggil 
$name_mhs->panggil_nama("Gita Listiani ");
$name_mhs->panggil_mahasiswa("Putri");
// tampilkan
echo "Nama depan saya ". $name_mhs->nama_saya. "<br>";
echo "Nama belakang saya ". $name_mhs->nama_mahasiswa. "<br>";
?>