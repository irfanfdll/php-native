<?php

$url ="https://api.kawalcorona.com/indonesia/";
//persiapkan curl unit
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return de tranfer as string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output constain teh output string
$dataCovid=curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
// echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <nav>
    <a href="json-api.php">Data Covid</a>
        <a href="json-indonesia.php">Data Indonesia</a>
        <a href="json-provinsi.php">Data Covid Provinsi </a>
        <a href="json-globalpositif.php">Globalpositif</a>
        <a href="api-meninggal.php">Meninggal</a>
    </nav>
    </center>
    
    <fieldset>
        <legend>Data COvid Indonesia</legend>
        <table border=1>
        <?php
            $data= json_decode($dataCovid);
            foreach ($data as $covid)
            {?>
            <tr>
                
                <th>Negara</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <tr>
                <td><?php echo $covid->name;?></td>
                <td><?php echo $covid->positif;?></td>
                <td><?php echo $covid->sembuh;?></td>
                <td><?php echo $covid->meninggal;?></td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
    
</body>
</html>
