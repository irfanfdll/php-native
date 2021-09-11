<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="jari">
        <input type="submit" name="save">
    </form>
</body>
</html>

<?php

if (isset($_POST['save'])) {
 $a = $_POST['jari'];
 function luas($jari,$phi=3.14){
    $luas = $phi * $jari * $jari;
    return  $luas;
}
function keliling($jari,$phi=3.14){
    $keliling = 2 * $phi * $jari;
    return  $keliling;
}
 echo "<br>";
 echo "Jari-jari = ".$a."<br>";
 echo "Luas Lingakran = ".luas($a)."<br>";
 echo "Keliling Lingakran = ".keliling($a)."<br>";

}
?>

