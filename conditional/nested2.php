<?php
$member ="y";
$totalbelanja = 250000;
$disc = 0;
$totalharga = 0;

if ($member == "y"){
    if ($totalbelanja >= 250000){
        $disc = 0.25 * $totalbelanja;

    } else if ($totalbelanja >= 100000){
        $disc = 0.05 * $totalbelanja;
    }
} else {
    if ($totalbelanja >= 100000){
        $disc = 0.25 * $totalbelanja;

    }
}
$totalharga = $totalbelanja - $disc;
echo "Kartu Member : $member<br>";
echo "Total Belanja : $totalbelanja<br>";
echo "Diskon : $disc<br>";
echo "Total yang harus di bayar : $totalharga<br>";
?>