<?php
class Admin
{
    public $nama = " Ahmad";
    protected $user = "Admin";
    private $pass = "001122";

    public function login()
    {
        $a = $this->user;
        $b = $this->pass;
        if ($a == "Admin" && $b == "001122") {
            $c = "Login Berhasil";
        } else {
            $c = "Login gagal";
        }
        return $c;
    }

    public function info()
    {
        $a = $this->user;
        $b = $this->nama;
        $c = "User : " . $a . "<br>Nama :  " . $b;
        return $c;
    }
}

$admin = new Admin();

echo "User : " . $admin->nama . "<br>";
echo "Password : " . "<br>";
echo "Info : " . $admin->login() . "<hr>";
echo "Info : " . $admin->info() . "<hr>";
