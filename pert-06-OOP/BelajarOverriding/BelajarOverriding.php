<?php

require 'Mahasiswa.php';

use BelajarOverriding\Mahasiswa;
use BelajarOverriding\MahasiswaTeknik;

$mhs1 = new MahasiswaTeknik('2250', 'Sunarto', 'Informatika');
$mhs1->getNama();

$mhs2 = new Mahasiswa('2211', 'Rasandaa', 'Teknik Mesin');
echo Mahasiswa::sayHello();

$mhs1->getNamaFromParentClass();

?>