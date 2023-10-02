<?php
class Manusia {
    // properti
    protected $nama_saya;

    // method
    protected function panggil_nama($saya){
        $this->nama_saya = $saya;
    }
}

// membuat class turunan dari class mahasiswa
class Mahasiswa extends Manusia {
    // proerti 
    private $nama_mahasiswa;

    // method
    private function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }

    public function setNamaSaya($saya) {
        $this->panggil_nama($saya);
    }

    public function setNamaMahasiswa($mahasiswa) {
        $this->panggil_mahasiswa($mahasiswa);
    }

    public function tampilkanNamaSaya() {
        return "Nama depan saya " . $this->nama_saya . "<br>";
    }

    public function tampilkanNamaMahasiswa() {
        return "Nama belakang saya " . $this->nama_mahasiswa . "<br>";
    }
}

// instansiasi class mahasiswa
$name_mhs = new Mahasiswa();

// Menggunakan metode publik untuk mengatur nama depan dan belakang
$name_mhs->setNamaSaya("Gita Listiani");
$name_mhs->setNamaMahasiswa("Putri");

// Menampilkan nama depan dan belakang
echo $name_mhs->tampilkanNamaSaya();
echo $name_mhs->tampilkanNamaMahasiswa();
?>
