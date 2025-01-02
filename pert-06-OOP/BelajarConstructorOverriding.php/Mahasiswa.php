<?php

namespace Data\satu;

class Mahasiswa
{
    var string $nim;
    var string $nama;
    var string $jurusan;

    function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function __destruct()
    {
        echo "<br>Object " . $this->nama . " Telah dihapus";
    }

    public function getJurusan()
    {

        echo $this->jurusan;
    }

    public function getName()
    {
        echo '<br>'. $this->nama . '<br>';
    }

    public function getNIM()
    {
        echo '<br>'. $this->nim . '<br>';
    }

    public static function sayHello() {

        return "Hello from MyNamespace!";
    }

}

class MahasiswaTeknik extends Mahasiswa
{

    /**
     * Summary of getNama
     * @return void
     * @override
     */

    public function __construct($nim, $nama){
        parent::__construct($nim, $nama, 'Teknik ApaAja'); // Construct dengan nilai default
    }

    public function getNama()
    { // ini override method
        echo 'Nama Mahasiswa : ' . $this->nama;
    }

    public function getNamaFromParentClass(){
        echo parent::getName();
    }
}

?>