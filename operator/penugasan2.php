<?php
      echo "1 < 10 = " .(1 < 10);
      echo "<br>9 > 10 dan 10 > 9 = ".((9 > 10) && (10 > 9));
      echo "<br>10 > 11 dan 9 < 10 = ".((9 > 10) || (10 > 9));
      echo "<br><br>";
            echo "Tono memiliki uang Rp 10.000";
            echo "<br>Tini memiliki uang Rp 8.000";
            echo "<br>Toni memiliki uang Rp 15.000";
            echo "<br>Apakah uang toni lebih besar dari tono dan tini = "
            . ((15>8)&&(15>10));
            echo "<br>Apakah uang toni lebih besar dari tini dan tidak lebih besar
             tini = ". ((15>8)&&(15<10));
                 $username = "user123";
                 $password = "pass1234";
                 echo "<br><br>";
                 echo "<br>Nama :  $username";
                 echo "<br>Password : $password ";
                 echo "<br>Login = ". (($username)&&($password));
?>