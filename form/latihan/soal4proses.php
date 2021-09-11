<?php
if (isset($_POST['proses'])) {
 $nama = $_POST['nama'];
 $kelamin = $_POST['kelamin'];
 $agama = $_POST['agama'];
 $golongan = $_POST['golongan'];
 $jam = $_POST['jam'];
 
 
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}
 
 
 if ($golongan ==1 ){
    $gajipokok = 1500000;
    $tunjangan = 150000;
}else if ($golongan ==2){
    $gajipokok = 2000000;
    $tunjangan = 200000;
}else if ($golongan ==3){
   $gajipokok = 2500000;
   $tunjangan = 250000;
}
else if ($golongan ==4){
   $gajipokok = 3000000;
   $tunjangan = 300000;
}
 
 if($jam >= 173){
    $lembur = ($jam - 173) *20000;
 } else if ($jam <= 173){
     $lembur = $jam;
 }
 

 $pajakgaji = 0.05 * $gajipokok;
 
 $pajaklembur = 0.05 * $lembur ;

 $totalpajak = $pajaklembur + $pajakgaji;

 $gajibersih = $gajipokok - $totalpajak;
 
 $jamlembur = $jam-173;
 $gajikotor =$gajipokok+$tunjangan+$lembur;
} 

?>
<html>
<link rel="stylesheet" href="style.css">
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Golongan</td>
            <td>Jumlah Jam Kerja</td>
            <td>Jumlah Jam Lembur</td>
        </tr>
        <tr>
            <td><?php echo"$nama";?></td>
            <td><?php echo"$kelamin";?></td>
            <td><?php echo"$agama";?></td>
            <td><?php echo"Golongan $golongan";?></td>
            <td><?php echo"$jam Jam";?></td>
            <td><?php echo"$jamlembur Jam";?></td>
        </tr>
        <tr><td colspan="6" align="center">Keuangan</td>
        </tr>
        <tr>
            <td colspan="5">Gaji Pokok</td>
            <td><?php echo rupiah($gajipokok); ?></td>
        </tr>
        <tr>
            <td colspan="5">Tunjangan </td>
            <td><?php echo  rupiah($tunjangan); ?></td>
        </tr>

        <tr>
            <td colspan="5">Gaji Lembur</td>
            <td><?php echo  rupiah($lembur); ?></td>
        </tr>

        <tr>
            <td colspan="5">Pajak Gaji Pokok</td>
            <td><?php echo  rupiah($pajakgaji); ?></td>
        </tr>

        <tr>
            <td colspan="5">Pajak Lembur</td>
            <td><?php echo  rupiah($pajaklembur); ?></td>
        </tr>
        </tr>
        <tr>
            <td colspan="6" align="center">Gaji Kotor</td>
        </tr>
        <tr>
            <td colspan="5">(Gaji Pokok + Tunjangan + Uang Lembur)</td>
            <td><?php echo rupiah($gajikotor); ?></td>
        </tr>
        <tr>
            <td colspan="6" align="center">Total Pajak</td>
        </tr>
        <tr>
            <td colspan="5">(Pajak Gaji Pokok + Pajak Lembur)</td>
            <td><?php echo rupiah($totalpajak); ?></td>
        </tr>
        <tr>
            <td colspan="6" align="center">Gaji Bersih</td>
        </tr>
        <tr>
            <td colspan="5">(Gaji Kotor - Total Pajak)</td>
            <td><?php echo rupiah($gajibersih); ?></td>
        </tr>
        
        
    </table>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    
    <button  onclick="window.print()" >Print</button>
    
    
    
</div>
</fieldset>
</html>