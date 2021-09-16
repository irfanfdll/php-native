<html>
 <head><title>Pengolahan Form</title></head>
 <body>
     <form action="" method="post">
        <fieldset>
            <legend></legend>
            <table>
                <tr>
            <td>Pilih Mahluk </td>
            <td> : </td>
            <td><select type="text" name="supir" >
            <option value= 1 > Manusia</option>
            <option value= 2 > Malaikat</option>
            <option value= 3 > Jin</option>
            <option value= 4 > Setan</option>
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
    $supir = $_POST['supir'];

    class Manusia
    {
        public function __construct($supir)
        {
            $this->supir = "$supir";

        }
        protected function beli_komputer()
        {
            return "Beribadah Kepada Tuhan";
        }
    }

// turunkan class Manusia ks Malaikat
    class Malaikat extends Manusia
    {
        protected function beli_laptop()
        {
            return "Beribadah Kepda Tuhan";
        }
    }
    class jin extends Malaikat
    {
        protected function beli_chromebook()
        {
            return "Labil";
        }
    }
// turunkan class Malaikat ke chromebook
    class setan extends jin
    {
        protected function etan()
        {
            return "Menggagu Manusia";
        }

        public function beli_semua()
        {
            if (0 > $this->supir) {
                $a = $this->beli_komputer();
            } elseif (3 < $this->supir) {
                $a = $this->etan();

            } elseif (2 < $this->supir) {
                $a = $this->beli_chromebook();

            } elseif (1 <= $this->supir) {
                $a = $this->beli_laptop();

            }

            // $b = $this->beli_laptop();
            // $c = $this->beli_chromebook();
            // $d = $this->etan();

            return "Tugasnya : $a ";
        }
    }

// buat objek dari class Malaikat (instansiasi)
    $gadget_baru = new setan($supir);

//panggil method objek
    echo $gadget_baru->beli_semua();

// $gadget_baru->beli_komputer();
    // Fatal error: Call to protected method Manusia::beli_komputer()
}