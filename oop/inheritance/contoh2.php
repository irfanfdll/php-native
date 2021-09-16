<?php
// buat class komputer
class komputer
{
    protected function beli_komputer()
    {
        return "Beli Komputer Baru";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{
    protected function beli_laptop()
    {
        return "Beli Laptop Baru";
    }
}

// turunkan class laptop ke chromebook
class chromebook extends laptop
{
    protected function beli_chromebook()
    {
        return "Beli Chromebook Baru";
    }

    public function beli_semua()
    {
        $a = $this->beli_komputer();
        $b = $this->beli_laptop();
        $c = $this->beli_chromebook();
        return "$a <br /> $b <br /> $c";
    }
}

// buat objek dari class laptop (instansiasi)
$gadget_baru = new chromebook();

//panggil method objek
echo $gadget_baru->beli_semua();

// $gadget_baru->beli_komputer();
// Fatal error: Call to protected method komputer::beli_komputer()
