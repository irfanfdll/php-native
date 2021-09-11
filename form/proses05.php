
<?php
if (isset($_POST['Login'])) {
 $user = $_POST['username'];
 $pass = $_POST['password'];
 if ($user == "achmatim" && $pass == "123") {
 echo "<h2>Login Berhasil</h2>";
 } else {
 echo "<h2>Login Gagal</h2>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tutorial Link di HTML</title>
    </head>
    <body>
      
          <a href="input05.php">Kembali</a>
        </p>
    </body>
</html>
    