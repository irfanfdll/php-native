<?php
// buat class induk: Komputer
class Komputer
{

    public $Merk;
    public $Processor;
    public $Memory;

    public function beliKomputer()
    {
        return "Beli Komputer Baru";
    }
}

// turunkan class Komputer ke Laptop
class Laptop extends Komputer
{

    public function lihatSpec()
    {
        return "Merk: $this->Merk, Processor: $this->Processor,
     Memory: $this->Memory";
    }
}

// buat objek dari class Laptop (instansiasi)
$laptop = new Laptop();

// isi property objek
$laptop->Merk = "Asus";
$laptop->Processor = "Intel Core I5";
$laptop->Memory = "4 GB";

//panggil method objek
echo $laptop->beliKomputer();
echo "<br />";
echo $laptop->lihatSpec();
