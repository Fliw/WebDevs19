<html>
<title>Tugas 5</title>
<?php
$user = array('19.11.6969','19.11.0420','19.11.0599');
$password = array('6969','420','599');
$log = fopen('webdevs-5.txt','a+');
function login($username, $pw)
{
    global $user,$password;
    for ($i = 0; $i < count($user);$i++){
        if ($username == $user[$i] && $pw == $password[$i]){
            return true;
        }
    }
    return false;
}

if ($_POST['login']){
    $username = $_POST['username'];
    $pw = $_POST['password'];
    $msg_log =
        "Username: $username\nPassword: $pw\n\n";
    if (login($username,$pw)){
        fwrite($log,$msg_log);
        echo '<h2>Anda berhasil login</h2>';
    } else{
        echo '<h2>Anda gagal login</h2>';
    }
}
echo '<a href="webdevs-5.txt" style="text-decoration: none;font-size: 20">Check logged in user here</a>';