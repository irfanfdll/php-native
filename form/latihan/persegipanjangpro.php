<?php
if (isset($_POST['save'])) {
 $panjang = $_POST['panjang'];
 $lebar = $_POST['lebar'];
 $luas= $panjang * $lebar;
 $keliling= 2 * ($panjang + $lebar);
 echo "<br>Panjang = $panjang";
 echo "<br>Lebar = $lebar";
 echo "<br>keliling = $keliling";
 echo "<br>Luas = $luas";
}
?>