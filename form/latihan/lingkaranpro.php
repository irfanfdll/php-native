<?php
if (isset($_POST['save'])) {
 $jari = $_POST['jari'];
 $luas= 3.14 * $jari * $jari;
 $keliling= 2 * 3.14 * $jari;
 echo "<br>jari-jari= $jari";
 echo "<br>keliling = $keliling";
 echo "<br>Luas = $luas";
}
?>