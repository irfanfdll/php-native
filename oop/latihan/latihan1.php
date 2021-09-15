<?php
class Komputer
{
    public $warna = "Hitam";
    public $ukuranLayar = "22 inc";
    public $merek = "Votre";
    public $ram = "4 GB";

    public function hidup()
    {
        return "Nyala";
    }

    public function mati()
    {
        return "Mati";
    }
}
$komputer1 = new Komputer();
echo "Warna Komputer : " . $komputer1->warna . "<br>";
echo "Merek Komputer : " . $komputer1->merek . "<br>";
echo "RAM Komputer : " . $komputer1->ram . "<br>";
echo "Keadaan Komputer : " . $komputer1->hidup() . "<br>";
echo "<hr>";

$komputer2 = new Komputer();
$komputer2->merek = "Lenovo";
$komputer2->warna = "Abu";
echo "Warna Komputer : " . $komputer2->warna . "<br>";
echo "Merek Komputer : " . $komputer2->merek . "<br>";
echo "RAM Komputer : " . $komputer2->ram . "<br>";
echo "Keadaan Komputer : " . $komputer2->mati() . "<br>";
echo "<hr>";

$komputer3 = new Komputer();
echo "Warna Komputer : " . $komputer3->warna . "<br>";
echo "Merek Komputer : " . $komputer3->merek . "<br>";
echo "RAM Komputer : " . $komputer3->ram . "<br>";
echo "Keadaan Komputer : " . $komputer3->mati() . "<br>";
echo "<hr>";

$komputer4 = new Komputer();
$komputer4->merek = "Samsung";
$komputer4->warna = "Putih";
echo "Warna Komputer : " . $komputer4->warna . "<br>";
echo "Merek Komputer : " . $komputer4->merek . "<br>";
echo "RAM Komputer : " . $komputer4->ram . "<br>";
echo "Keadaan Komputer : " . $komputer4->hidup() . "<br>";
echo "<hr>";
$komputer5 = new Komputer();
$komputer5->merek = "Asus";
$komputer5->warna = "Pink";
$komputer5->ram = "20 GB";
echo "Warna Komputer : " . $komputer5->warna . "<br>";
echo "Merek Komputer : " . $komputer5->merek . "<br>";
echo "RAM Komputer : " . $komputer5->ram . "<br>";
echo "Keadaan Komputer : " . $komputer5->hidup() . "<br>";
echo "<hr>";
