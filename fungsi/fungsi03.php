<!-- <?php
function luas_lingkaran($jari)
{
    return 3.14 * $jari * $jari;
}
//pemanggilan fungsi
$r = 10;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);
?>  -->

<?php
function LuasSegitiga($a, $b)
{
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) / 2;
    return $luas;

}
echo "luas Segitiga :" . LuasSegitiga(10, 8);