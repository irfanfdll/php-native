<!-- <?php 
function tambah_string ($str) { 
 $str = $str . ", Jakarta"; 
 return $str; 
} 
// 
$str = "Universitas Budi Luhur"; 
echo "\$str = $str<br>"; 
echo tambah_string ($str). "<br>"; 
echo "\$str = $str<br>"; 
?>  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function pertambhan($bil1=1, $bil2 =2){
    return  $bil1 + $bil2;
}

echo pertambhan(10,10)."<br>";
echo pertambhan(10)."<br>";
echo pertambhan(8)."<br>";
echo pertambhan();
?>
</body>
</html>