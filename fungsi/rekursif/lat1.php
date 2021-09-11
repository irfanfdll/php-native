<html>
 <head><title>Pengolahan Form</title></head>
 <body>
 <FORM ACTION="" METHOD="POST" NAME="input">
 Masukan Bilangan : <input type="number" name="bilangan"><br>
 Masukan Pangkat : <input type="number" name="pangkat"><br>
 <input type="submit" name="Input" value="Input">
 </FORM>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
 $bilangan = $_POST['bilangan'];
 $pangkat = $_POST['pangkat'];
}echo "<br>hasil dari perkalian     ";

function faktorial($bilangan,$pangkat){
    if($pangkat>1){
       // return $hasil=$bilangan ** $pangkat;
        return $bilangan *faktorial($bilangan,$pangkat-1);
        $bagi= $bilangan /= $pangkat;
    }else{
        return $bilangan;
    }
}
for ($i=1; $i <=$pangkat ; $i++) { 
    echo "$bilangan  ";
    if($i <$pangkat){
        echo" x ";
    }
}
echo" = ";
echo faktorial($bilangan,$pangkat);

 ?>
