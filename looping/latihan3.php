<?php
echo "No 1<br>";
$plus = 0;
for ($i =1; $i <= 5; $i++) {
    $plus += 1;  
    for ($j = 1; $j <= 5; $j++){
        echo $j + $plus. " ";
    }
echo "<br>";
}
echo "<hr>";



echo "No 2<br>";
$plus = 0;
for ($i =1; $i <= 10; $i++) {
    $plus += 2;  
    for ($j = 1; $j <= $i; $j++){
        echo $j + $plus. " ";
    }
echo "<br>";
}


?>