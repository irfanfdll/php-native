<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Pembayaran Dari  Aplikas Gofud</legend>
            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="number" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td><input type="number" name="jumlahpesanan"></td>
                </tr>

                    <tr>
            <td>Sistem Pembayaran </td>
            <td> : </td>
            <td><select type="text" name="sistempembayaran" >
            <option value= "Cash" > Cash</option>
            <option value= "M-Banking" > M-Banking</option>
            <option value= "Gopay" > Gopay</option>
            <option value= "PikUp" > PikUp</option>
            </select></td>
            </tr>
            <tr>
                 <td></td><td></td>
                 <td><input type="submit" name="Input" value="Input"><hr></td>
                </tr>



    </form>
    <?php
if (isset($_POST['Input'])) {
    $namabarang = $_POST['namabarang'];
    $jumlahpesanan = $_POST['jumlahpesanan'];
    $harga = $_POST['harga'];
    $sistempembayaran = $_POST['sistempembayaran'];

    class pembayaran
    {
        public function __construct($namabarang, $jumlahpesanan, $harga, $sistempembayaran)
        {
            $this->namabarang = "$namabarang";
            $this->jumlahpesanan = $jumlahpesanan;
            $this->harga = $harga;
            $this->sistempembayaran = $sistempembayaran;

        }
        public function discount()
        {
            if ($this->sistempembayaran >= 150000) {
                $hargadiscount = $this->sistempembayaran * 0.1;
            } elseif ($this->sistempembayaran >= 250000) {
                $hargadiscount = $this->sistempembayaran * 0.15;
            } else {
                $hargadiscount;
            }
        }

    }
// turunkan class Malaikat ke chromebook
    class systemPembayaran extends pembayaran
    {
        public function status()
        {
            if ("Cash" == $this->sistempembayaran) {
                $a = "Menggangu Manusia";

            } elseif ("M-Banking" == $this->sistempembayaran) {
                $a = "Ada Yang beribadah ada juga yang menyesatkan";

            } elseif ("Gopay" == $this->sistempembayaran) {
                $a = "Beribadah Kepada Tuhan";

            } elseif ("PikUp" == $this->sistempembayaran) {
                $a = "Beribadah Kepada Tuhan";

            }

            // $b = $this->nilaiMalaikat();
            // $c = $this->nilaijin();
            // $d = $this->nilaiSetan();
            return $a;
        }
    }
    $output = new systemPembayaran($namabarang, $jumlahpesanan, $harga, $sistempembayaran);

//panggil method objek
    echo "<tr><td>Nim</td> <td>:</td>  <td>" . $output->status() . "</td><tr>";

}

?>
      </table>
        </fieldset>
</body>
</html>
