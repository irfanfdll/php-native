<?php
if (isset($_POST['input'])) {
 $bilangan1 = $_POST['bilangan1'];
 $bilangan2 = $_POST['bilangan2'];
 $hasil =$bilangan1 + $bilangan2;
 echo "Bilangan $bilangan1 + bilangan $bilangan2 = <b>$hasil</b>";
 $kurang =$bilangan1 - $bilangan2;
 echo "<br>Bilangan $bilangan1 - bilangan $bilangan2 = <b>$kurang</b>";
 $kali =$bilangan1 * $bilangan2;
 echo "<br>Bilangan $bilangan1 x bilangan $bilangan2 = <b>$kali</b>";
 $bagi =$bilangan1 / $bilangan2;
 echo "<br>Bilangan $bilangan1 : bilangan $bilangan2 = <b>$bagi</b>";
}
?> 