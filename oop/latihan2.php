<?php
{
    // mendefinisikan sebuah class
    class segitiga
    {
        //membuat property atau atribute
        public $alas = 10;
        public $tinggi = 15;
        public $a = 10;
        public $b = 15;
        public $c = 10;
        //membuat method atau behaviour
        public function luassegitiga()
        {

            return ($this->alas * $this->tinggi / 2);
        }
        public function kelilingsegitiga()
        {

            return ($this->a + $this->b + $this->c);
        }
    }
    //membuat object instalasi object
    $segitiga1 = new segitiga();
    echo "Sisi 2 : " . $segitiga1->b . "<br>";
    echo "Alas Segita : " . $segitiga1->alas . "<br>";
    echo "Tinggi Segitiga : " . $segitiga1->tinggi . "<br>";
    echo "Sisi 1 : " . $segitiga1->a . "<br>";
    echo "Sisi 3 : " . $segitiga1->c . "<br>";
    echo "Luas Segitiga : " . $segitiga1->luassegitiga() . "<br>";
    echo "Keliling Segitiga : " . $segitiga1->kelilingsegitiga() . "<br>";
    echo "<hr>";

}
