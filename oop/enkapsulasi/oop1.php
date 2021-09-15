<?php
class Laptop
{
    public $pemilik;
    protected function hidupkanLaptp()
    {
        return "Hidupkan Laptop";
    }
    public function paksaHidupkanLaptop()
    {
        return $this->hidupkanLaptp();
    }
}

$laptopAnto = new Laptop();
$laptopAnto->pemilik = "Anto<br>";

echo $laptopAnto->pemilik;
echo $laptopAnto->paksaHidupkanLaptop();
