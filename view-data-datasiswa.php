<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA</title>
</head>
<body>
    <center>
        <table>
            <tr >
                <th colspan="8">HASIL INPUT DATA SISWA</th>
            </tr>

            <tr >
                <td colspan="8">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>

            <tr>
                <th>NIS siswa</th>
                <th>:</th>
                <td><?= $nis; ?></td>
            </tr>

            <tr>
                <th>kelas Siswa</th>
                <th>:</th>
                <td><?= $kelas; ?></td>
            </tr>

            <tr>
                <th>tanggal lahir Siswa</th>
                <th>:</th>
                <td><?= $tanggallahir; ?></td>
            </tr>

            <tr>
                <th>tempat lahir Siswa</th>
                <th>:</th>
                <td><?= $tempatlahir; ?></td>
            </tr>

            <tr>
                <th>alamat siswa</th>
                <th>:</th>
                <td><?= $alamat; ?></td>
            </tr>

            <tr>
                <th>jenis kelamin Siswa</th>
                <th>:</th>
                <td><?= $jk; ?></td>
            </tr>

            <tr>
                <th>agama Siswa</th>
                <th>:</th>
                <td><?= $agama; ?></td>
            </tr>

            <tr >
                <td colspan="8" align="center">
                    <a href="<?= base_url('Datasiswa'); ?>"></a>
                </td>
            </tr>
            
        </table>
    </center>
</body>
</html>