<?php
class Mahasiswa
{
    var string $nim;
    var string $nama;
    var string $jurusan;

    function __construct($nim, $nama, $jurusan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }
    
    function __destruct(){
        echo "<br>Object Telah dihapus";
    }

    public function getJurusan()
    {

        echo $this->jurusan;
    }

    public function getName()
    {
        echo $this->nama;
    }

}

?>