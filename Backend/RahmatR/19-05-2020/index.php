<!DOCTYPE html>
<html lang="en">
<body>
<form method="POST">
    <fieldset>
        <legend>Login</legend>
        <label for="username">NIM:</label>
        <label for="username"></label><input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <label for="password"></label><input type="password" id="password" name="password"><br><br>
        <input name="submit" type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>

<?php
date_default_timezone_set('Asia/Jakarta');

// register users
$uNameReg = array("19.11.0001", "19.11.0002", "19.11.0003");
$passReg = array("abc1", "abc2", "abc3");

function loginCheck($uName, $pass)
{
    global $uNameReg, $passReg;
    for ($i = 0; $i <= count($uNameReg); $i++) {
        if ($uName == $uNameReg[$i] && $pass == $passReg[$i]) {
            return true;
        }
    }
    return false;
}


if (isset($_POST['submit'])) {

    // get form input
    $uName = $_POST['username'];
    $pass = $_POST['password'];

    // file log name and create it
    $fileName = 'log.txt';
    if (!file_exists($fileName)) {
        $handle = fopen($fileName, 'w') or die('Cannot create file:  ' . $fileName);
        var_dump(file_exists($fileName));
        fwrite($handle, '');
    }

    if (loginCheck($uName, $pass)) {
        $handle = fopen($fileName, 'a') or die('Cannot open file:  ' . $fileName);
        $logMsg = "[" . date("d-m-Y") . " - " . date("h:i:sa") . "] " .
            "$uName has successfully logged in" . PHP_EOL;

        // append write log msg
        fwrite($handle, $logMsg);

        header('location: result.php?status=success');
        die();
    } else {
        header('location: result.php?status=fail');
        die();
    }

}
