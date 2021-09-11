<?php 
  
    $nilaiakademik = 95;
    $nilaiatletik = 100;
    $jawab = $nilaiakademik >= 85 && $nilaiatletik >=83 
    
    ? "<b>Lulus</b>" : "<b>Tidak Lulus</b>";
    echo "nilai akademik :". $nilaiakademik . "<br>";
    echo "nilai atletik :". $nilaiatletik . "<br>";
    echo "Dinyatakan :". $jawab;

?>
<!-- <?php
    $tahun = date ("2020");
    $kabisat = $tahun % 4 == 0;
    $jawab = $kabisat ? "iya" : "bukan tahun kabisat";
    echo $tahun . "<br>";
    echo "tahun kabisat : ". $jawab;
?> -->

    