<html>
 <head><title>Pengolahan Form</title></head>
 <body>
     <form action="" method="post">
        <fieldset>
            <legend>OOP Inheritanche</legend>
            <table>
                <tr>
            <td>Pilih Mahluk </td>
            <td> : </td>
            <td><select type="text" name="mahluk" >
            <option value= "Manusia" > Manusia</option>
            <option value= "Malaikat" > Malaikat</option>
            <option value= "Jin" > Jin</option>
            <option value= "Setan" > Setan</option>
            </select></td>
            </tr>

<tr>
    <td></td><td></td>
    <td>
 <input type="submit" name="Input" value="Input"></td>
</tr>
 </table>
</form>
 </fieldset>
 </body>
</html>
<?php
if (isset($_POST['Input'])) {
    $mahluk = $_POST['mahluk'];

    class Mahluk
    {
        public function __construct($mahluk)
        {
            $this->mahluk = "$mahluk";

        }
        public function namaMahluk()
        {
            return "Jenis Mahluk : " . $this->mahluk;

        }
    }
// turunkan class Malaikat ke chromebook
    class JenisMahluk extends Mahluk
    {
        public function menampilkanSifat()
        {
            if ("Setan" == $this->mahluk) {
                $a = "Menggangu Manusia";

            } elseif ("Jin" == $this->mahluk) {
                $a = "Ada Yang beribadah ada juga yang menyesatkan";

            } elseif ("Malaikat" == $this->mahluk) {
                $a = "Beribadah Kepada Tuhan";

            } elseif ("Manusia" == $this->mahluk) {
                $a = "Beribadah Kepada Tuhan";

            }

            // $b = $this->sifatMalaikat();
            // $c = $this->sifatjin();
            // $d = $this->sifatSetan();
            return $this->namaMahluk() . " <br> Sifat Mahluk : $a ";
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $sifat = new JenisMahluk($mahluk);

//panggil method objek
    echo $sifat->menampilkanSifat();

// $sifat->sifatMahluk();
    // Fatal error: Call to protected method Manusia::sifatMahluk()
}