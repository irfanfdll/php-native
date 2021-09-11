<?php
 if (isset($_POST['proses'])) {
 $nama = $_POST['nama'];
 $kelamin = $_POST['kelamin'];
 $tanggallahir = $_POST['tanggallahir'];
 $agama = $_POST['agama'];
 $alamat = $_POST['alamat'];
 $hobi = $_POST['hobi'];

 }
 function tampilbiodata($nama,$kelamin,$tanggallahir,$agama,$alamat,$hobi ){
     echo "<table>";
 echo "<tr><td>Nama</td> <td>:</td><td> ".$nama."</td></tr>";
 echo "<tr><td>Jenis Kelamin</td> <td>:</td><td> ".$kelamin."</td></tr>";
 echo "<tr><td>Tanggal Lahir</td> <td>:</td><td> ".$tanggallahir."</td></tr>";
 echo "<tr><td>Agama</td> <td>:</td><td> ".$agama."</td></tr>";
 echo "<tr><td>Alamat</td> <td>:</td><td> ".$alamat."</td></tr>";
 echo "<tr><td>Hobi</td> <td>:</td><td> ";
 foreach ($hobi as $item => $val){
     echo "<li>". $val . "</li>";
 }
 echo "</td></tr></table>";
}
echo tampilbiodata($nama,$kelamin,$tanggallahir,$agama,$alamat,$hobi);
?>