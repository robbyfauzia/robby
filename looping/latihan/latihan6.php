<?php

$bintang = 5;
for ($i = $bintang; $i >0; $i--) {
    for ($a = 1; $a <= $i; $a++) {
        echo "&nbsp";
    }
    for ($i1 = $bintang; $i1>=$i; $i1--) {
        echo "*";
    }
    echo "<br>";
}

?>