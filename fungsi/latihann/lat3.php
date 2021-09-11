<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Peminjaman Mobil</title>
</head>
<body>
<fieldset>
<legend>Rental Mobil</legend>

<form action="lat3pro.php" method="post">

    <table>
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input  type="radio"  name="kelamin" value="laki-laki" >
            Laki-laki
            <input type="radio" name="kelamin" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td><input type="date" name="tanggallahir"></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select  name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><input type="tetxarea" name="alamat"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td> : </td>
            <td>
                <input type="checkbox" name="hobi[]" value="Bermain Bola"> Bermain Bola
                <input type="checkbox" name="hobi[]" value="Berlari"> Berlari
                <input type="checkbox" name="hobi[]" value="Bersepeda"> Bersepeda
                <input type="checkbox" name="hobi[]" value="Memancing"> Memancing
                <input type="checkbox" name="hobi[]" value="Berenang"> Berenang
                <input type="checkbox" name="hobi[]" value="Berkuda"> Berkuda
        
        </td>
        </tr>
        



<tr></tr>

        <tr>
        <td></td><td></td>
            <td><input type="submit" name="proses"></td>
        </tr>
        

     
 </form>
 </fieldset>
 </table>
</body>
</html>







