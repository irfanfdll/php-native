
<?php

class Login(){
    
}
// Lampirkan dbconfig

//jika ada data yg dikirim

if (isset($_POST['kirim'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    // Proses login user
    

    if ($user->login($email, $password)) {

        header("location: index.php");
    } else {

        // Jika login gagal, ambil pesan error

        $error = $user->getLastError();
    }
}

class OrangTua
{
    protected $noAtm = "1111-2222-3333-4444";
    private $pinAtm = "001122";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}
 ingin mengetahui data atm dari object orang tua
echo "No Kartu Atm : " . $orangTua->noAtm() . "<br>";
echo "Pin Atm : " . $orangTua->pinAtm() . "<hr>";

