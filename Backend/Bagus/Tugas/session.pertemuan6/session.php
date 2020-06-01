<?php
session_start();
// akun
$user = array('bagusp81@gmail.com','bagus.pranowo@students.amikom.ac.id');
$password = array('bagus123','amikom123');

function login($username, $pw)
{
    global $user,$password;
    for ($i = 0; $i < count($user);$i++) {
        if ($username == $user[$i] && $pw == $password[$i]) {
            return true;
        }
    }
    return false;
}
$username = $_POST['email'];
$pw = $_POST['password'];
if (isset($_SESSION['login']) && $_SESSION['login'] == "true"){
    echo "Anda sudah login";
    echo "<a href='index.php'>Klik sini untuk menuju home</a>";
} else if (login($username,$pw)){
    $_SESSION['login'] = "true";
    $_SESSION['email'] = $_POST['email'];
    echo "<h1>Anda berhasil login</h1>";
    echo "<a href='index.php'>Klik sini untuk menuju home</a>";

} else {
    echo "Anda gagal login";
    echo "<a href='index.php'>Login</a>";
}
?>
