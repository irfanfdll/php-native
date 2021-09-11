<?php
if (isset($_POST['save'])) {
 $sisi= $_POST['sisi'];
 $luas = $sisi * $sisi;
 $keliling = 4 * $sisi;
 echo "<br>jari-jari= $sisi";
 echo "<br>keliling = $keliling";
 echo "<br>Luas = $luas";
}
?>