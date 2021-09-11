<?php
if (isset($_POST['save'])) {
    $jumlah = $_POST['jumlah'];
for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}
}
?>