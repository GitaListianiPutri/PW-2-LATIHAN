<?php

class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct(){
       $this->koneksi =  mysqli_connect($this->host, $this->username, $this->password, $this->db);

    }

    function tampil_mahasiswa(){
        $data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa");
        // perulangan untuk mengambil semua data yang ada pada tabel mahasiswa
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

}
?>