<?php

$gp = 4500000;
$bpjs = 200000;
$infak = 50000;
$a = 10000;
$b = 24;


$c = $a * $b;
echo "uang transport dikali 24 hari";
echo "<br>";
echo "$a * $b = $c";
echo "<hr>";

$gaji = $gp * 2.5 / 100;
echo "gaji pokok dibagi 2,5%";
echo "<br>";
echo "$gp * 2.5 / 100 = $gaji";
echo "<br>";

$gap = $gp - $gaji;
echo "$gp - $gaji = $gap";
echo "<hr>";

echo "bpjs tambah infak";
echo "<br>";
$g = $bpjs + $infak;
echo "$bpjs + $infak = $g";
echo "<hr>";

echo "gaji pokok dikurang bpjs sama infak";
echo "<br>";
$qa = $gap - $g;
echo "$gap - $g = $qa";
echo "<hr>";

echo "gaji ditambah transport";
echo "<br>";
$pp = $qa + $c;
echo "$qa + $c = $pp"

?>