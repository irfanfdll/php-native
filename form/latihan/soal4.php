<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <form action="soal4proses.php" method="post">
        <tr>
            <td>Nama </td>
            <td> : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td> : </td>
            <td><input type="radio" name="kelamin" value="laki-laki" >
            laki-laki
            <input type="radio" name="kelamin" value="perempuan"> 
            Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td> : </td>
            <td><select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>Golong an </td>
            <td> : </td>
            <td><select name="golongan">
            <option value= 1 > 1</option>
            <option value= 2 > 2</option>
            <option value= 3 > 3</option>
            <option value= 4 > 4</option>
            </select></td>
        </tr>
        <tr>
            <td>Jumlah jam</td>
            <td> : </td>
            <td><input type="number" name="jam"></td>
        </tr>
        <tr>
            <td><input type="submit" name="proses"></td>
        </tr>
        

     
 </form>
 </table>
</body>
</html>