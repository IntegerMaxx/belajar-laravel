<?php

require_once 'Mahasiswa.php';

$mhs = new MahasiswaTeknik('2201', 'Otong', 'Teknik Sipil');
echo $mhs->getNama() . '</br>';
echo $mhs->getJurusan() . '</br>';
// echo $mhs->getNIM();

$mhs3 = new Mahasiswa('22501058', 'Sunarto', 'Teknik Informatika');

echo $mhs3->getNama() . '<br>';
echo $mhs3->getJurusan() . '<br>';

$mhs2 = new Mahasiswa('22501058', 'Rasandaku', 'Teknik Informatika');

echo $mhs2->getNama() . '<br>';
echo $mhs2->getJurusan() . '<br>';

?>