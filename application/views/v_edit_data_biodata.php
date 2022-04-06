<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Edit Bioata</h1>
<form action = "<?=base_url('Dealer/action_editbiodata')?> "method="post">
    <table border="1" width="500" align="center">
    <tr>
        <td>Nama depan</td>
        <td>:</td>
        <td>
            <input type="hidden" name="id" value="<?= $biodata['id']?>">
            <input type="text" name="nama_depan" class="form-control" value="<?= $biodata ['nama_depan']?>">
        </td>
    </tr>
    <tr>
        <td><label>Nama belakang</label></td>
        <td>:</td>
        <td><input type="text" name="nama_belakang" class="form-control" value="<?= $biodata ['nama_belakang']?>"></td>
    </tr>
    <tr>
        <td><label>tempat lahir</label></td>
        <td>:</td>
        <td><input type="text" name="tempat_lahir" class="form-control" value="<?= $biodata ['tempat_lahir']?>"></td>
    </tr>
    <tr>
        <td><label>tanggal lahir </label></td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir" class="form-control" value="<?= $biodata ['tanggal_lahir']?>"></td>
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
        <td><input type="text" name="alamat" class="form-control" value="<?= $biodata ['alamat']?>"></td>
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
</form>
</body>
</html>