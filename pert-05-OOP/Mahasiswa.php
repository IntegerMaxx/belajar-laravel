<?php
class Mahasiswa{
    var string $nim;
    var string $nama;
    var string $jurusan;

    function __construct($nim, $nama, $jurusan){
        $this->nim =$nim;
        $this->nama =$nama;
        $this->jurusan =$jurusan;
    }

    public function __destruct(){
        echo $this->nama . ' Telah dihapus' . '<br>';
    }

    public function getJurusan(){
        echo $this->jurusan;
    }

    public function getNama(){
        echo $this->nama;
    }

    private function getNIM(){
        echo $this->nim;
    }
}

class MahasiswaTeknik extends Mahasiswa{
    
}

?>