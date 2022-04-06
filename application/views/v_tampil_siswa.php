<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h3> <p align = center>**Tabel Data Siswa**</p> </h3>
    <table border = 1 align = center>
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Tempat lahir</th>
                <th>Tanggal Lahir</th>
                <th>No Hp</th>
                <th>Program</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach ($siswa as $s) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $s->siswa_nisn ?></td>
                    <td><?= $s->siswa_nis ?></td>
                    <td><?= $s->siswa_nama_lengkap ?></td>
                    <td><?= $s->siswa_tempat_lahir?></td>
                    <td><?= $s->siswa_tanggal_lahir ?></td>
                    <td><?= $s->siswa_nohp ?></td>
                    <td><?= $s->program_id ?></td>
                </tr>
                <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>