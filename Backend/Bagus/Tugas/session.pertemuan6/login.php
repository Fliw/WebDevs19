<?php
session_start();
if (isset($_SESSION['email'])){
    echo "<center><h1>Anda sudah login sebagai <br>".$_SESSION['email']."</h1></center>";
    echo "<center><a href='index.php'>Home</a></center>";
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Selamat Datang</h1>
<h1>Silakan login terlebih dahulu</h1>
<form action="session.php" method="post">
    <p>Email: <input type="email" name="email"></p>
    <p>Password: <input type="password" name="password"></p>
    <p><input type="submit" value="login"></p>
</form>

</body>
</html>
<?php
}?>