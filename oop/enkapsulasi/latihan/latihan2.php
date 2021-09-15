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
            <legend></legend>
            <table>
                <tr>
                    <td>Jumlah Kaki Kucing </td>
                    <td>:</td>
                    <td><input type="number" name="jumlahKaki"></td>
                </tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['proses']))    {
    $jumlahKaki = $_POST['jumlahKaki'];

    class MenentukanJumlahKakiKucing
    {
        public function __construct($jumlahKaki)
        {
            $this->jumlahKaki = "$jumlahKaki";

        }
        public function keadaanKucing()
        {
            if ($this->jumlahKaki > 4) {
                $outpu = "Siluman Kucing";
            } elseif ($this->jumlahKaki < 4) {
                $outpu = "Kucing Cingked";
            } elseif ($this->jumlahKaki = 4) {
                $outpu = "Kucing Normal";
            }
            return $outpu;
        }

    }
    $kaki = new MenentukanJumlahKakiKucing($jumlahKaki);
    echo "<table>";
    echo "<tr><td>Jumlah Kaki</td><td>:</td><td>" . $kaki->jumlahKaki . "</td></tr>";
    echo "<tr><td>Info</td><td>:</td><td>" . $kaki->keadaanKucing() . "</td></tr>";
    echo "</table>";
}