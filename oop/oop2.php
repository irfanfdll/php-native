<?php
class Ucapan {
    public function siang(){
        return "Selamat siang";
    }
    public function sore(){
        return "Selamat sore";
    }
    public function __construct(){
        echo "Selamat pagi<br>";
    }
}
$selamat = new Ucapan();
echo $selamat->siang()."<br>";
echo $selamat->sore(); 
