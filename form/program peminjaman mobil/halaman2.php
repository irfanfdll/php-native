<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $nomobil = $_POST['nomobil'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $merek = $_POST['merek'];
        $penjamin = $_POST['penjamin'];
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
<form action="halaman3.php" method="post">
<input type="hidden" name="nama" value=<?php echo "$nama";?> >
<input type="hidden" name="nik" value=<?php echo "$nik";?> >
<input type="hidden" name="kelamin" value=<?php echo "$kelamin";?> >
<input type="hidden" name="agama" value=<?php echo "$agama";?> >
<input type="hidden" name="namamobil" value=<?php echo "$namamobil";?> >
<input type="hidden" name="jenismobil" value=<?php echo "$jenismobil";?> >
<input type="hidden" name="tanggalpeminjaman" value=<?php echo "$tanggalpeminjaman";?> >
<input type="hidden" name="nomobil" value=<?php echo "$nomobil";?> >
<input type="hidden" name="tanggalkembali" value=<?php echo "$tanggalkembali";?> >
<input type="hidden" name="supir" value=<?php echo "$supir";?> >
<input type="hidden" name="merek" value=<?php echo "$merek";?> >
<input type="hidden" name="penjamin" value=<?php echo "$penjamin";?> >

    <table>
    <tr>
            <td>Tanggal Pengembalian</td>
            <td> : </td>
            <td><input  type="date" name="tanggalpengembalian"></td>
            <td><input type="submit" name="proses"></td>
        </tr>
    </table>
</form>
</body>
</html>