<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
<legend> Input Arrray
</legend>

    <form action="" method="post">
    <table>
    <tr>
    <td>Masukan jumlah data </td>
    <td> : <input type="number" name="jumlah"></td>
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="simpan" value="Simpan">
    <input type="reset" value="Reset">   
    </td>
    </tr>
    </table>
    </form>
    </fieldset>

    
    
    
    <?php
    if(isset($_POST['simpan'])){
        $row =$_POST['jumlah'];
        
        for($i = 1; $i <= $row; $i++)
        {

        
        ?>

    <fieldset>
    <legend>Input Data Siswa</legend>
    <form action="contoh1pro.php" method="post">
    <table>
    <tr>
    <th colspan="2">Data ke<?php echo $i; ?></th>
    <td>Nama</td>
    <td><input type="text" name="nama[]"></td>
    </tr>
    <tr>
    <th colspan="2"></th>
    <td>Kelas </td>
    <td><input type="text" name="kelas[]"></td>
    </tr>
    <th ></th>
    <td><button type="submit" name="save">Simpan</button></td>
    <tr>
    </tr>
    </table>
    </fieldset>

        <?php
    }
}
    ?></form>
</body>
</html>