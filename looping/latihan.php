<?php
$i = 2;
do {
    echo "$i ";
    $i*=2;
} while($i<= 64);
echo "<hr> ";
$i = 625;
do {
    echo "$i ";
    $i /=5;
} while($i >= 5);
echo "<hr>";
$books= [
    18,45,29,61,47,34,
];

foreach ($books as $buku) {
    $sisabagi = $buku % 3;
    echo "$buku % 3 = $sisabagi<br>";
}
echo "<hr>";
for ($i =0; $i <= 5; $i++) {
    for ($j = 0; $j < $i; $j++){
        echo "*";
    }
echo "<br>";
}
echo "<hr>";


for($a=0; $a<=5; $a++){
    for($b=5; $b>$a; $b--){
        print("&nbsp");
    }
    for($c=0; $c<$a; $c++){
        echo " * ";
    }
    echo "<br/>";
}
echo "<hr>";
?>



