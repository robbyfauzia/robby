<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
    <center><h1>Form Pengulangan</h1></center>
    <center>
        <form action="soal3.php" method="post">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        1.Deret Bilangan Ganjil
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        2.Segitiga Sama kaki Terbalik
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        3.Deret Bilangan Kelipatan
                    </td>
                </tr>
                <tr>
                    <td>Pilih</td>
                    <td>:</td>
                    <td><input type="number" name="pilih"></td>
                </tr>
                <tr>
                    <td>Masukkan Angka</td>
                    <td>:</td>
                    <td><input type="number" name="masukkan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" value="KIRIM">
                    </td>
                </tr>
            </table>
        </center>
    </form>
<?php

if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];
    $angka = $_POST ['masukkan'];


    if ($pilih == 1) {
        echo "<center>";
        echo "<h3>Deret Bilangan Ganjil<h3/>";
        for ($x = 1; $x <= $angka; $x+=2) {
            echo "$x ";
        }
        echo "</center>";
    }elseif ($pilih == 2) {
        echo "<center>";
        echo "<h3>Segitiga Sama Kaki Terbalik</h3>";
        for ($x = $angka; $x >= 1; $x--){
            for ($v = $angka; $v > $x; $v--){
                echo " ";
            }for ($c = 1; $c <= $x; $c++){
                echo "* ";
            }
            echo "<br>";
        }
        echo "</center>";
    }elseif ($pilih == 3){
        echo "<center>";
        echo "<h3>Deret Bilangan Kelipatan 3</h3>";
        for ($x = 3; $x <= $angka; $x+=3){
            echo "$x ";
        }
        echo "</center>";
    }    
}
?>

    </fieldset>
</body>
</html>

