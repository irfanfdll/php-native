<?php
    $nilai = "e" ;
    switch ($nilai){
        case 'a' : $komentar = "pertahankan" ; break;
        case 'b' : $komentar = "harus lebih baik lagi" ; break;
        case 'c' : $komentar = "perbanyak belajar" ; break;
        case 'd' : $komentar = "jangan keseriangan main" ; break;
        case 'e' : $komentar = "kebanyakan bolos" ; break;
        default :  $komentar = "Format Tidak sesuai";
    }
        echo " grade <b> $nilai </b> $komentar";
?>