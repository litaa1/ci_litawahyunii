<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Bioata</h1>
<form action = "<?=base_url('Dealer/action_tambahdata')?> "method="post">
    <table>
    <tr>
        <td><label>Nama Lengkap</label></td>
        <td>:</td>
        <td><input type="text" name="namaa"></td>
    </tr>
    <tr>
        <td><label>Kelas</label></td>
        <td>:</td>
        <td><input type="text" name="kelass"></td>
    </tr>
    <tr>
        <td><label>Alamat</label></td>
        <td>:</td>
        <td><textarea name="alamatt" id="" cols="30" rows="3"></textarea></td>
    </tr>
    <tr>
        <td><label>Sekolah</label></td>
        <td>:</td>
        <td><input type="text" name="sekolahh"></td>
    </tr>
    <tr>
        <td><label>Tanggal lahir</label></td>
        <td>:</td>
        <td><input type="date" name="ttl"></td>
    </tr>
    <tr>
        <td><label>Jenis Kelamin</label></td>
        <td>:</td>
        <td><select name="jeniskelamin" id="">
            <option value="L" >Laki-laki</option>
            <option value="P" >Perempuan</option> 
        </select></td>
    </tr>
    <tr>
        <td><label>Hobi</label></td>
        <td>:</td>
        <td>
            <input type="checkbox" name="hobii" value="membaca">membaca
            <input type="checkbox" name="hobii" value="menulis">menulis
            <input type="checkbox" name="hobii" value="menyanyi">menyanyi
            <input type="checkbox" name="hobii" value="berenang">berenang
        </td>
    </tr>
    <tr>
        <td><label>status</label></td>
        <td>:</td>
        <td>
            <input type="radio" name="statuss" value="pelajar">pelajar
            <input type="radio" name="statuss" value="menikah">menikah
        </td>
    </tr>
    <tr>
        <td><label>Upload foto</label></td>
        <td>:</td>
        <td><input type="file" name="foto"></td>
    </tr>
    </table>
  <br><br>
    <button name="simpan"> Simpan</button>
</form>
</body>
</html>