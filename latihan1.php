<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Wisata Yogyakarta</h2></center>
    <ol>
        <li>Bukit Bintang Rp. 10.000</li>
        <li>Pantai Sadranan Rp. 15.000</li>
        <li>Candi Borobudur Rp. 50.000</li>
        <li>Candi Prambanan Rp. 50.000</li>
        <li>Keraton Yogyakarta Rp. 5.000</li>
        <li>Malioboro Rp. 5.000</li>
        <li>Pendopo Lawas -> Cafe</li>
        <li>Goa Pindul Rp. 100.000</li>
    </ol>
    <p></p>
    <form action="proses1.php" method="post">
        <table>
            <tr>
                <td>Nama:</td>
                <td></td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <th style="text-align: left">Pilih</th>
                <td>:</td>
                <td>
                    <select name="Pilih" id="">
                        <option value=" ">--Pilih--</option>
                        <option value="bukit bintang">1</option>
                        <option value="pantai sadranan">2</option>
                        <option value="candi borobudur">3</option>
                        <option value="candi prambanan">4</option>
                        <option value="keraton yogyakarta">5</option>
                        <option value="malioboro">6</option>
                        <option value="pendopo lawas">7</option>
                        <option value="goa pindul">8</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah:</td>
                <td></td>
                <td>
                    <input type="number" name="Jumlah">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name="Kirim">KIRIM</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>