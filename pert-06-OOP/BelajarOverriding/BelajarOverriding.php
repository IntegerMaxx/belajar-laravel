<?php

require 'Mahasiswa.php';

use Data\satu\Mahasiswa;
use Data\satu\MahasiswaTeknik;

$mhs1 = new MahasiswaTeknik('2250', 'Sunarto', 'Informatika');
$mhs1->getNama();

$mhs2 = new Mahasiswa('2211', 'Rasandaa', 'Teknik Mesin');
echo \Data\satu\Mahasiswa::sayHello();

$mhs1->getNamaFromParentClass();

?>