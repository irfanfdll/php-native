<?php
  $nilai = 60;
  if ($nilai >= 90){
    $grade = 'A';
    }
  else if ($nilai >= 80){
    $grade = 'B';
    }
  else if ($nilai >= 70){
    $grade = 'C';
    }
  else if ($nilai >= 60){
    $grade = 'D';
    }
  else {
    $grade = 'E';
    }
    switch ($grade){
    case 'A' : $komentar = "pertahankan" ; break;
    case 'B' : $komentar = "harus lebih baik lagi" ; break;
    case 'C' : $komentar = "perbanyak belajar" ; break;
    case 'D' : $komentar = "jangan keseriangan main" ; break;
    case 'E' : $komentar = "kebanyakan bolos" ; break;
    default :  $komentar = "Format Tidak sesuai";
    }
    echo " Nilai : <b> $nilai </b><br>";
    echo " Grade : <b> $grade</b><br>";
    echo " Keterangan : <b> $komentar";
?>