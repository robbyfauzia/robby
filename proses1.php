<?php

if (isset ($_POST['Kirim'])) {
    $pilih  = $_POST['Pilih'];
    $jumlah  = $_POST['Jumlah'];
    $nama = $_POST['nama'];
    
    if ($pilih == "bukit bintang") {
        $harga = 10000;
    }elseif ($pilih == "pantai sadranan") {
        $harga = 15000;
    }elseif ($pilih == "candi borobudur") {
        $harga = 50000;
    }elseif ($pilih == "candi prambanan") {
        $harga = 50000;
    }elseif ($pilih == "keraton yogyakarta") {
        $harga = 5000;
    }elseif ($pilih == "malioboro") {
        $harga = 5000;
    }elseif ($pilih == "pendopo lawas") {
        $harga = 0;
    }elseif ($pilih == "goa pindul") {
        $harga = 100000;
    }

    $a = $jumlah * $harga;

    if ($a>=50000 && $a<70000) {
        $d=$a*0.2;
    }

    
    echo "<center>";
    echo "<br>";
    echo "<h1>struk pembelian</h1>";
    echo "<td>";
    echo "----------------------------------------------------------------------------------";
    echo "<table>";
    echo "<tr>";
    echo "<td>Nama Pembeli</td>";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Wisata Yang Dipilih</td>";
    echo "<td>:</td>";
    echo "<td>$pilih</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jumlah Tiket Yang Dibeli</td>";
    echo "<td>:</td>";
    echo "<td>$jumlah</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Harga Per-tiket</td>";
    echo "<td>:</td>";
    echo "<td>$harga</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Total Pembelian</td>";
    echo "<td>:</td>";
    echo "<td>$a</td>";
    echo "</tr>";

}
