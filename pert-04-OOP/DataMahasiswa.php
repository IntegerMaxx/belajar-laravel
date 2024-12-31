<?php
require_once 'Mahasiswa.php';

$mhs = new Mahasiswa('22501058', 'Sunarto', 'Teknik Informatika');

echo $mhs->getName() . '<br>';
echo $mhs->getJurusan() . '<br>';
echo '<br>';

$mhs2 = new Mahasiswa('22501010', 'Rasandaaa', 'Teknik Informatika');

echo $mhs2->getName() . '<br>';
echo $mhs2->getJurusan() . '<br>';

unset($mhs2);

?>