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
       <center><h2>Syarat Masuk Ke Miko Mall</h2></center>
       <form action="soal1.php" method="post">
           <center>
               <table>
                   <tr>
                       <th style="text-align: left">Nama Anda</th>
                       <td>:</td>
                       <td>
                           <input type="text" name="nama" size="50"/>
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Status Vaksin</th>
                        <td>:</td>
                        <td>
                            <select name="vaksin" id="">
                                <option value="">--Status Vaksin--</option>
                                <option value=" ">sudah vaksin</option>
                                <option value=" ">belum vaksin</option>
                            </select>
                        </td>
                        <tr>   
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="simpan">KIRIM</button></td>
                        </tr>
                    </tr>
                </table>
            </center>
        </form>
<?php

echo"<center>";
if (isset ($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $status = $_POST['status'];

    echo "<br>";
    
    echo "Nama Anda : $nama<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status Vaksin: $status<br>";
    echo "<br>";

    if ($status == "Sudah Vaksin") {
    echo "<i><b>Diizinkan<b><i>";
}else {
    echo "<i><b>Tidak Diizinkan</i></b><br><br>";
    echo '<a href="https://www.pedulilindungi.id/*">Silahkan Daftar Vaksin</a>';
}
}  
echo"<center/>";
?>
   </fieldset>
</body>
</html>