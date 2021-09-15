<?php
class Komputer
{
    private $jenisProcessor = "Intel Core I7";
    public function tampilkanJenisProcessor()
    {
        return $this->jenisProcessor;
    }
}
class Laptop extends Komputer
{
    public function getProcessor()
    {
        return $this->tampilkanJenisProcessor();
    }
}
$komputer = new Komputer();
$laptop = new Laptop();
echo $laptop->getProcessor();
echo $komputer->tampilkanJenisProcessor();
