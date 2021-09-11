<!-- <?php 
function cetak_ganjil ($awal, $akhir) { 
 for ($i=$awal; $i<$akhir; $i++) { 
 if ($i%2 == 1) { 
 echo "$i "; 
 } 
 } 
} 
//pemanggilan fungsi 
$a = 10; 
$b = 50; 
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>"; 
cetak_ganjil($a, $b); 
?>  -->
<?php
function LuasSegitiga(){
    $alas =10;
    $tinggi = 5;
    $luas =($alas* $tinggi)/ 2;
    return $luas;
}
echo "Luas Segitiga :" . LuasSegitiga();