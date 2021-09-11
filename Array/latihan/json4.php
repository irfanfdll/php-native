<?php
//looping php json

$dataMhs ='[
           {"nama" : "Mahmud","domisili":"Bandung"},
           {"nama" : "Maemunah","domisili":"Ciamis"},
           {"nama" : "Mahmud","domisili":"Garut"},
           {"nama" : "Asep","domisili":"Pekanbaru"}
           ]';

        //    $data = json_decode($dataMhs);
           echo json_encode($dataMhs);
            // foreach ($dataMhs as $mhs){
            //     echo "Nama : " . $mhs->nama ."<br>";
            //     echo "Domisili : " . $mhs->domisili."<br>";
            //     echo "<hr>";
            // }
            ?>
