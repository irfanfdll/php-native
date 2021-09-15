
<?php

if (isset($_POST['Input'])) {

    $jumlahKaki = $_POST['kaki'];

    class jumlahKakiKucing
    {
        public $jumlahKaki;

        public function kakinya()
        {
            $a = 4;
            if ($jumlahKaki = $a) {
                $outpu = "Kucing Normal";
            } elseif ($a >= $jumlahKaki) {
                $outpu = "Siluman Kucing";
            } else {
                $outpu = "Kucing Cingked";
            }
            return $outpu;
        }
    }

    $aduh = new jumlahKakiKucing();

    echo "Info : " . $aduh->kakinya() . "<hr>";
    echo "Jumlah kaki" . $aduh->jumlahKaki;

}