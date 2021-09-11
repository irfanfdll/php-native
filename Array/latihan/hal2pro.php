<?php
if(isset($_POST['save'])){
    $nama =$_POST['nama'];
    $asalsekolah =$_POST['asalsekolah'];
    $indonesia =$_POST['indonesia'];
    $nilaimatematika =$_POST['nilaimatematika'];
    $inggris =$_POST['inggris'];
    $nilaiipa =$_POST['nilaiipa'];

    // echo "<pre>";
    // var_dump($kelas);
    // echo "</pre>";


}
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
    <fieldset>
    <legend>Data Siswa</legend>
    <table border=1 width=100%>
    <tr>
    <th>Nomor</th>
    <th>Nama</th>
    <th>Asal Sekolah</th>
    <th>Nilai Bahasa Indonesia</th>
    <th>Nilai Matematika</th>
    <th>Nilai Bahasa Inggris</th>
    <th>Nilai IPA</th>
    <th>Total Nilai</th>
    <th>Keterangan</th>
    </tr>
    <?php
    $no =1;
    for($i=0; $i <count($nama); $i++){?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $nama[$i]; ?></td>
        <td><?php echo $asalsekolah[$i]; ?></td>
        <td><?php echo $indonesia[$i]; ?></td>
        <td><?php echo $nilaimatematika[$i]; ?></td>
        <td><?php echo $inggris[$i]; ?></td>
        <td><?php echo $nilaiipa[$i]; ?></td>
        <td><?php 

        $totalnilai[$i] = (($nilaiipa[$i] + $nilaimatematika[$i]) + ($indonesia[$i] + $inggris[$i]));

        echo $totalnilai[$i]; ?></td>
        <td><?php 
        $keterangan=340;
        if ($totalnilai[$i]>=$keterangan) {
            echo "Diterima";
        } elseif ($totalnilai[$i]<=$keterangan) {
            echo "Tidak Diterima";
        }

          ?></td>
        
    </tr>

   <?php 
    }
    ?>
    </table>
    <style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
 
    <div style=text-align:right>Bandung,<?php echo date('d  F  Y');?>
    <br><br><br><br><br>
    <br>Sekertaris<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
    

</div>
    </fieldset>
</body>
</html>