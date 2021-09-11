<?php
$matrik =[[2,3,4],
         [7,5,0],
         [4,5,8],];
         echo $matrik[1][0];
         echo $matrik[0][2]."<br>";

         foreach ($matrik as $key => $val) {
             $s=$key+1;
            echo "Baris $s : $val[0],$val[1],$val[2]<br>";
           }

           ?>
           
        
         