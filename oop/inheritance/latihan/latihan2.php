<html>
 <head><title>Pengolahan Form</title></head>
 <body>
 <form action="" method="post">
     <fieldset>
         <legend>OOP Inheritance</legend>
         <table>
             <tr>
                 <td>Nama</td>
                 <td>:</td>
                 <td><input type="text" name="nama" required></td>
             </tr>
             <tr>
                 <td>Nim</td>
                 <td>:</td>
                 <td><input type="number" name="nim"required></td>
             </tr>
             <tr>
                 <td>Nilai</td>
                 <td>:</td>
                 <td><input type="number" name="nilai" min="0" max="100" required></td>
             </tr>
             <tr>
                 <td>Dosen</td>
                 <td>:</td>
                 <td><input type="text" name="dosen"required></td>
             </tr>
             <tr>
                 <td>Mata Kuliah</td>
                 <td>:</td>
                 <td><input type="text" name="matakuliah"required></td>
             </tr>
             <tr>
                 <td></td><td></td>
                 <td><input type="submit" name="Input" value="Input"><hr></td>
             </tr>



 </FORM>

<?php
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $nim = $_POST['nim'];
    $matakuliah = $_POST['matakuliah'];
    $dosen = $_POST['dosen'];

    class Mahasiswa
    {
        public function __construct($nama, $nim, $nilai, $matakuliah, $dosen)
        {
            $this->nama = "$nama";
            $this->nilai = $nilai;
            $this->nim = $nim;
            $this->matakuliah = $matakuliah;
            $this->dosen = $dosen;

        }

    }
// turunkan class Malaikat ke chromebook
    class mataKuliah extends Mahasiswa
    {
        public function status()
        {
            if (65 >= $this->nilai) {
                $a = "Grade D (Tidak Lulus)";

            } elseif (75 >= $this->nilai) {
                $a = "Grade C (Perbaikan)";

            } elseif (85 >= $this->nilai) {
                $a = "Grade B (Lulus)";

            } else {
                $a = "Grade A (Lulus)";

            }

            // $b = $this->nilaiMalaikat();
            // $c = $this->nilaijin();
            // $d = $this->nilaiSetan();
            return $a;
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $nilai = new mataKuliah($nama, $nim, $nilai, $matakuliah, $dosen);

//panggil method objek
    echo "<tr><td>Nim</td> <td>:</td>  <td>$nilai->nim</td><tr>";
    echo "<tr><td>Nama</td> <td>:</td>  <td>$nilai->nilai</td><tr>";
    echo "<tr><td>Nilai</td> <td>:</td>  <td>$nilai->dosen</td><tr>";
    echo "<tr><td>Mata Kuliah</td> <td>:</td>  <td>$nilai->matakuliah</td><tr>";
    echo "<tr><td>Status</td> <td>:</td>  <td>" . $nilai->status() . "</td><tr>";

// $nilai->nilaiMahluk()
    // Fatal error: Call to protected method Manusia::nilaiMahluk()
}
?>

         </table>
     </fieldset>
</body>
</html>