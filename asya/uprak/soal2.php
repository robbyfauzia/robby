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
        <center>
            <H3>Penggajihan Karyawan</H3>
            <h1>PT.Selalu Makmur jaya</h1>
        </center>
        <form action="proses2.php" method="post">
            <center>
                <table>
                    <tr>
                        <th style="text-align: left">Nama Bendahara</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="bendahara" size="50"/>
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Nama Pekerja</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="pekerja" size="50"/>
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Jenis Kelamin</th>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jkm" value="Laki-Laki" />Laki-Laki
                            <input type="radio" name="jkm" value="Perempuan" />Perempuan
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Tanggal Gaji</th>
                        <td>:</td>
                        <td>
                            <label for="Tanggal Gaji"></label>
                            <input type="date" name="tgl">
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Jabatan</th>
                        <td>:</td>
                        <td>
                            <select name="jabatan" id="">
                                <option value="Status Vaksin">--Pilih Jabatan--</option>
                                <option value="Direktur">Direktur</option>
                                <option value="Manager">Manager</option>
                                <option value="Sekertaris">Sekertaris</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="OB">OB</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Pendidikan Terakhir</th>
                        <td>:</td>
                        <td>
                            <select name="pendidikan" id="">
                                <option value="Status Vaksin">--Pendidikan Terakhir--</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Status Pegawai</th>
                        <td>:</td>
                        <td>
                            <input type="radio" name="sp" value="TETAP" /><b>TETAP</b>
                            <input type="radio" name="sp" value="KONTRAK" /><b>KONTRAK</b>
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Lembur</th>
                        <td>:</td>
                        <td>
                            <input type="number" name="lembur" size="50"/>Hari / Rp. 20.000
                        </td>
                    </tr>
                    <tr>
                        <th style="text-align: left">Potongan BPJS</th>
                        <td>:</td>
                        <td>
                            <input type="number" name="bpjs" size="50"/>
                        </td>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="submit" name="save">KIRIM</button></td>
                        </tr>
                    </tr>
                </table>
            </center>
        </form>
    </fieldset>
</body>
</html>