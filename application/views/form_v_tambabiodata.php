<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Tambah Bioata ku</h1>
<form action = "<?=base_url('Dealer/action_tambahbiodata')?> "method="post">
<table border="1" width="500" align="center">
    <tr>
        <td><label>Nama depan</label></td>
        <td>:</td>
        <td><input type="text" name="nama_depan"></td>
    </tr>
    <tr>
        <td><label>Nama belakang</label></td>
        <td>:</td>
        <td><input type="text" name="nama_belakang"></td>
    </tr>
    <tr>
        <td><label>tempat lahir</label></td>
        <td>:</td>
        <td><input type="text" name="tempat_lahir"></td>
    </tr>
    <tr>
        <td><label>tanggal lahir </label></td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir"></td>
    </tr>
    <tr>
        <td><label>jenis kelamin </label></td>
        <td>:</td>
        <td><input type="radio" name="jenis_kelamin" value="L">laki laki</td>
        <td><input type="radio" name="jenis_kelamin" value="P">Perempuan</td>
    </tr>
    <tr>
        <td><label>alamat </label></td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td><label>jenjang pendidikan</label></td>
        <td>:</td>
        <td>
            <select name ="jenjang_pendidikan" id="">
                <option value="smk">smk/sederajat</option>
                <option value="sd">sd</option>
                <option value="tk">tk</option>
            </select>
        </td>
    </tr>
    <td colspan="3" class= "text-center">
    <button type="submit" class="btn btn-primary"> Simpan</button>
   <button a href="tampil_data" class="btn btn-warning">kembali</a></button>
    </td>
</table>
 

</body>
</html>