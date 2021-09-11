<?php
if (isset($_POST['save'])) {
 $alas = $_POST['alas'];
 $tinggi = $_POST['tinggi'];
 $luas= 0.5 * $alas *$tinggi;
 $keliling= $alas + $alas + $alas;
 echo "<br>alas = $alas";
 echo "<br>tinggi = $tinggi";
 echo "<br>keliling = $keliling";
 echo "<br>Luas = $luas";
}
?>