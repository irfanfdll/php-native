<!-- <?php 
function tambah_string (&$str) { 
 $str = $str . ", Jakarta"; 
 return $str; 
} 
// 
$str = "Universitas Budi Luhur"; 
echo "\$str = $str<br>"; 
echo tambah_string ($str). "<br>"; 
echo "\$str = $str<br>"; 
?>  -->
<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam= "Assalamualaikum"){
    echo $salam .",     ";
    echo "Perkenalkan, nama saya ". $nama ."<br>";
    echo "Saya berusia " . hitungUmur(2003,2021). " Tahun <br>";
    echo "Senang berkenalan dengan anda <br>";  
}
echo perkenalan("Irfan fadillah");
?>