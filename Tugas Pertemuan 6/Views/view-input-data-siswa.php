<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('DataSiswa/print'); ?>" method="POST">
            <table>
                <tr>
                    <th colspan="3">Form Input Data Siswa</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td><input type="text" name="nis" id="nis"></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td><input type="text" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td><input type="text" name="tgl" id="tgl"></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td><input type="text" name="tempat" id="tempat"></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td><input type="radio" name="jk" id="jk"><label>Laki - Laki</label>
                        <input type="radio" name="jk" id="jk"><label>Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td><select name="agama" id="agama">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>