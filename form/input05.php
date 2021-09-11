<html>
 <head><title>Login Here</title></head>
 <body>
    
 <FORM ACTION="proses05.php" METHOD="POST" NAME="input">
 <h1 align="center">LOGIN</h1>
 <table align = "center"><tr>
<td>Username </td>
<td>:</td>
<td><input type="text" name="username"><br></td>
</tr>
<tr> <td>Password </td>
<td> : </td>
<td><input type="password" name="password" ><br></td></tr>
<tr><td></td><td></td>
<td><input type="submit" name="Login" value="Login">
<input type="reset" name="reset" value="Reset"></td>
</tr></table>
  
 
 
 </FORM>
 </body>
</html> 
<!-- <?php
if (isset($_POST['Login'])) {
 $user = $_POST['username'];
 $pass = $_POST['password'];
 if ($user == "admin" && $pass == "123") {
 echo "<h2>Login Berhasil</h2>";
 } else {
 echo "<h2>Login Gagal</h2>";
 }
}
?>  -->
