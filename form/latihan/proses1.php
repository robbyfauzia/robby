<?php

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    if ($jk == "Laki-laki" && $tb > 170 && $bb <90) || ($jk == "Perempuan" && $tb > 165 && $bb <90) {
            $ket "diterima";
        }else {
            $ket "tidak diterima";
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>Persyaratan Masuk TNI/Polri</center>
    nama : <b><?php echo $nama?></b><br>
    jenis kelamin : <b><?php echo $jk?></b><br>
    tinggi badan : <b><?php echo $tb?></b><br>
    berat badan : <b><?php echo $bb?></b><br>
    keterangan : <b><?php echo $ket?></b>
</body>
</html>