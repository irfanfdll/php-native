<?php
    $uangUcup = 100000;
    $air = 15000;
    $sosis = 25000;
    $sedekah = 10;
    $nemuUang = 50;

    echo "Uang Ucup = $uangUcup<br>";
    echo "<hr>";

    echo "Jajan Minum = $air <br>";
    $sisa = $uangUcup - $air;
    echo "Sisa Uang Ucup Jajan Minum = $sisa";
    echo "<hr>";

    echo "Jajan Sosis Bakar = $sosis<br>";
    $sisaJajan = $sisa - $sosis;
    echo "Sisa Uang Ucup Jajan Sosis Bakar + Minum = $sisaJajan";
    echo "<hr>";

    $sisaSedekah = $sedekah / 100 * $sisaJajan;
    echo "Sedekah ke musafir ".$sedekah."% dari $sisaJajan yaitu sebesar $sisaSedekah <br>";
    $sisaUang = $sisaJajan - $sisaSedekah;
    echo "Sisa Uang Ucup = $sisaUang";
    echo "<hr>";

    $nemu = $nemuUang / 100 * $sisaUang;
    echo "Nemu Uang dijalan sebesar ".$nemuUang."% dari sisa uang Ucup $sisaUang yaitu sebesar $nemu <br>";
    $total = $nemu + $sisaUang;
    echo "Sisa Uang Ucup sekarang = $nemu + $sisaUang";
    echo "<hr>";

    echo "Total uang Ucup adalah Rp.$total";
?>