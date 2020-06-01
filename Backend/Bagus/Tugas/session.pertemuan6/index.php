<?php
session_start();
if (!isset($_SESSION['email'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<center>
    <h1>Ini Dashboard<br> <?php echo $_SESSION['email'];?></h1>
    <a href="logout.php">Logout</a>
</center>
</body>
</html>