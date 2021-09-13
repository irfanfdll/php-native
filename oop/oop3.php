<?php
// mengedintefikasi sebuah kelas
class Kucing{
    //property atau atribute
    public $warna;

    //membyat method
    public function __construct($warna){
        $this-> warna = "$warna";
    }
    public function berburu(){
        return "Berburu Ikan";
    }public function bersuara(){
        return "meowng....meowng.....meowng";
    }
    
}
// memebuat object (intisiasi object)
$kucing1 = new Kucing("Hitam");
echo "Warna Kucing 1: ".$kucing1->warna . "<br>";
echo "Sifat Kucing : ".$kucing1->bersuara()."<br>";
echo "<hr>";
$kucing2 = new Kucing("Oren");
echo "Warna Kucing 2: ".$kucing2->warna . "<br>";
echo "Sifat Kucing : ".$kucing2->berburu()."<br>";
