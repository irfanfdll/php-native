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
        
        
        


        
        ?>

    <fieldset>
    <legend>Input Data Siswa</legend>
    <form action="hal2pro.php" method="post">
    <table >
    <?php
    for($i = 1; $i <= $row; $i++)
    
    { ?>
    <tr><th align="left">Data ke<?php echo $i; ?></th></tr>
    <tr>
    
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama[]"></td>
    </tr>

    <tr>
    
    <td>Asal Sekolah</td>
    <td>:</td>
    <td><input type="text" name="asalsekolah[]"></td>
    </tr>   

    <tr>
    
    <td>Nilai Bahsa Indonesia</td>
    <td>:</td>
    <td><input type="number" name="indonesia[]"></td>
    </tr>

    <tr>
    
    <td>Nilai Matematika</td>
    <td>:</td>
    <td><input type="number" name="nilaimatematika[]"></td>
    </tr>

    <tr>
    
    <td>Nilai Bahasa Inggris</td>
    <td>:</td>
    <td><input type="number" name="inggris[]"></td>
    </tr>

    <tr>
    <td>Nilai IPA</td>
    <td>:</td>
    <td><input type="number" name="nilaiipa[]"></td>
    </tr>


    <?php }?>
    <tr>        
    <td>    </td>
    <td></td>
    <td><button type="submit" name="save">Simpan</button></td>
    </tr>
    </table>
    </fieldset>
    <?php }?>

        
        </form>
</body>
</html>