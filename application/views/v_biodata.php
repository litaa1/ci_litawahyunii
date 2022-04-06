<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodata</title>
</head>
<body>
    <center><h1> **MY BIODATA** </h1></center>
    <center><a href="<?= base_url('Dealer/tambah_data')?>">Input data</a></center>
    <table border = "1" width = "50%" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nm ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $kls ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $alm ?></td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>:</td>
            <td><?= $skl ?></td>
        </tr>
        <tr>
            <td>tanggal lahir</td>
            <td>:</td>
            <td><?= $ttl ?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td><?= $jk ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?= $hobi ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $status ?></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td><?= $foto ?></td>
        </tr>


    </table>
</body>
</html>