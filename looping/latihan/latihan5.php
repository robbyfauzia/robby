<?php

$siswa = [
    ['nama' => 'yuli', 'jk' => 'perempuan','umur' => 17],
    ['nama' => 'rizky', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' => 'rizal', 'jk' => 'Laki-laki', 'umur' => 17],
    ['nama' => 'rohesa', 'jk' => 'Laki-laki',  'umur' => 16],
    ['nama' => 'suci', 'jk' => 'Perempuan', 'umur' => 17],
];

foreach ($siswa as $value) {
    echo "Nama : " . $value['nama'] . "<br>";
    echo "Jenis Kelamin : " . $value['jk'] . "<br>";
    echo "umur : " . $value['umur'] . "<br>";
    echo "<hr>";
}


?>