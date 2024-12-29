<?php
$nilai = array(60, 70, 80, 85);
$nilai2 = [60, 70, 80, 85];

$mahasiswa = ["Dody", "Rahmadi", "Satrio Yudhoi", "Abdi"];
echo "nilai = $nilai[0], nilai2 = $nilai2[2], mahasiswa ke-2 = $mahasiswa[1]";

$nilai3 = array(
    1 => 60,
    2 => 70,
    3 => 80,
    4 => 85
);

$mahasiswa2 = [
    "22501058" => "Sunarto",
    "22501042" => "Maxx",
    "22501055" => "John",
    "22501056" => "ucup"
];

$nilaiMahasiswa2 = array(
    "Sunarto" => 95,
    "Maxx" => 87,
    "John" => 79,
    "ucup" => 90,
);

echo "<br><br>nama mahasiswa dengan nim 22501042 adalah {$mahasiswa2['22501042']}<br>dia memiliki nilai {$nilaiMahasiswa2["Maxx"]} ";
?>