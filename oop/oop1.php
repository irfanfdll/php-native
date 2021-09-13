<?php
// mengedintefikasi sebuah kelas
class Kucing{
    //property atau atribute
    public $warna ="Coklat";
    public $jumlahKaki = "4";
    public $jenisBulu = "panjang";
    public $makananfavorit = "Ikan Pindang ";

    //membyat method
    public function bersuara(){
        return "meowng....meowng.....meowng";
    }
    public function berburu(){
        return "Berburu Ikan";
    }
    
}
// memebuat object (intisiasi object)
$kucing1 = new Kucing();
echo "warna kucing : ".$kucing1->warna . "<br>";
echo "Sifat kucing : ".$kucing1->bersuara()."<br>";
echo "<hr>";
$kucing2 = new Kucing();
//set warna kucing
$kucing2->warna = "oren";
echo "warna kucing : ".$kucing2->warna . "<br>";
echo "Sifat kucing : ".$kucing2->berburu()."<br>";
