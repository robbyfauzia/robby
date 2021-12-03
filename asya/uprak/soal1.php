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
        <form action="proses1.php" method="post">
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
                        <select name="status" id="">
                            <option value="">--Status Vaksin--</option>
                            <option value="Sudah Vaksin">sudah vaksin</option>
                            <option value="Belum Vaksin">belum vaksin</option>
                        </select>
                    </td>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" value="KIRIM" name="kirim">KIRIM</button></td>
                    </tr>
                    </tr>
                </table>
            </center>
        </form>
    </fieldset>
</body>
</html>