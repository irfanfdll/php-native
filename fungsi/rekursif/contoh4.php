<?php
function tampilkanAngka(int $jumlah, int $indeks=1){
       echo "<strong style='color: green'>
       Sebelum memanggil diri sendiri [{$indeks}] </strong><br>";
       # panggil diri sendir selama $indeks<=jumlah
       if($indeks<$jumlah){
           tampilkanAngka($jumlah,$indeks+1);
       }else{
           echo "<strong style='color: red'> proses terakhir</strong><br>";
       }
       echo "<strong style='color: blue'> Sesudah Memanggil dieri sendiri[{$indeks}] </strong><br>";
     }

     tampilkanAngka(5);