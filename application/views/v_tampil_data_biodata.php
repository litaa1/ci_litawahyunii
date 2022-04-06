<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body><p align = center>++Tabel Data Biodata++</P>
<center><button class="btn btn-dark"><a href="<?= base_url('Dealer/tambah_biodata')?>" class="badge badge-dark">tambah data</a></button></center>
    <table border = 1 align = center class= "table table-danger container table-bordered">
        <thead>
            <tr class= "table table-dark container ">
                <th>No</th>
                <th>Nama depan</th>
                <th>Nama belakang</th>
                <th>tempat lahir</th>
                <th>tanggal lahir</th>
                <th>jenis kelamin</th>
                <th>alamat</th>
                <th>jenjang pendidikan</th>
                <th colspan = "2">aksi</th>
            </tr>

        </thead>
        <tbody>
            <?php $no = 1; foreach ($biodata as $b) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $b->nama_depan ?></td>
                    <td><?= $b->nama_belakang ?></td>
                    <td><?= $b->tempat_lahir ?></td>
                    <td><?= $b->tanggal_lahir ?></td>
                    <td><?= $b->jenis_kelamin ?></td>
                    <td><?= $b->alamat ?></td>
                    <td><?= $b->jenjang_pendidikan ?></td>

                    <td  ><a href = "<?= base_url("Dealer/edit_biodata/".$b->id)?>" class="badge badge-dark"><i class="fa fa-edit"></i>edit</a></td>
                    <td><a href = "<?= base_url("Dealer/hapus_biodata/".$b->id)?>" class="badge badge-dark"><i class="fa fa-edit">hapus</a></td>
                    
                </tr>
                <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>