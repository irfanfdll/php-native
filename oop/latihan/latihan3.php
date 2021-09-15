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
            <legend>Aritmatika</legend>
            <table>
                <tr>
                    <td>Bilangan 1 </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan1"></td>
                </tr>
                <tr>
                    <td>Bilangan 2 </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan2"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
}
class Aritmatika
{
    public function __construct($bilangan1, $bilangan2)
    {
        $this->bilangan1 = "$bilangan1";
        $this->bilangan2 = "$bilangan2";
        $tambah = $this->bilangan1 + $this->bilangan2;
    }
    public function tambah()
    {

        return ($this->bilangan1 + $this->bilangan2);
    }
    public function kurang()
    {

        return ($this->bilangan1 - $this->bilangan2);
    }
    public function kali()
    {

        return ($this->bilangan1 * $this->bilangan2);
    }
    public function bagi()
    {

        return ($this->bilangan1 / $this->bilangan2);
    }
    public function modulus()
    {

        return ($this->bilangan1 % $this->bilangan2);
    }

}
$penjumlahan = new aritmatika($bilangan1, $bilangan2);
echo "<table>";
echo "<tr><td>Bilangan 1</td><td>:</td><td>" . $penjumlahan->bilangan1 . "</td></tr>";
echo "<tr><td>Bilangan 2</td><td>:</td><td>" . $penjumlahan->bilangan2 . "</td></tr>";
echo "<tr><td>Penjumlahan</td><td>:</td><td>" . $penjumlahan->tambah() . "</td></tr>";
echo "<tr><td>Pengurangan</td><td>:</td><td>" . $penjumlahan->kurang() . "</td></tr>";
echo "<tr><td>Perkalian</td><td>:</td><td>" . $penjumlahan->kali() . "</td></tr>";
echo "<tr><td>Pembagian</td><td>:</td><td>" . $penjumlahan->bagi() . "</td></tr>";
echo "<tr><td>Modulus</td><td>:</td><td>" . $penjumlahan->modulus() . "</td></tr>";
echo "</table>";
