<!DOCTYPE html>
<html lang="en">
<body>
<form method="POST">
    <fieldset>
        <legend>Login</legend>
        <label for="username">E-mail:</label>
        <label for="username"></label><input type="email" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <label for="password"></label><input type="password" id="password" name="password" required><br><br>
        <input name="submit" type="submit" value="Submit">
    </fieldset>
</form>
</body>
</html>

<?php
session_start();
date_default_timezone_set("Asia/Jakarta");

// register users
$userReg = array(
    1 => array(
        "email" => "19.11.0001@gmail.com",
        "pass" => "abc1"
    ),
    2 => array(
        "email" => "19.11.0002@gmail.com",
        "pass" => "abc2"
    ),
    3 => array(
        "email" => "19.11.0003@gmail.com",
        "pass" => "abc3"
    )
);

if (isset($_POST["submit"])) {
    // get form input
    $uName = $_POST["username"];
    $pass = $_POST["password"];

    // handle file log
    $fileName = "log.txt";
    $handle = fopen($fileName, "a") or die("Cannot create file:  " . $fileName);

    $login_status = loginCheck($uName, $pass);

    switch ($login_status) {
        case "logged":
            $logMsg = "[" . date("d-m-Y") . " - " . date("h:i:sa") . "] " .
                      "$uName has successfully logged in" . PHP_EOL;

            // append write log msg
            fwrite($handle, $logMsg);
            fclose($handle);

            // add to session
            $_SESSION["username"] = $uName;
            $_SESSION["password"] = $pass;
            header("location: result.php?status=logged");
            die();
            break;
        case "wrong_email":
            header("location: result.php?status=wrong_email");
            die();
            break;
        case "wrong_pass":
            header("location: result.php?status=wrong_pass");
            die();
            break;
        default:
            header("location: result.php?status=error");
            die();
            break;
    }
} else {
    if (isset($_SESSION["username"])) {
        // action for logout
        if ($_GET["logout"] === $_SESSION["username"]) {
            session_unset();
            session_destroy();
        } else {
            // redirect to result if logged and
            // action log out not set
            header("location: result.php");
        }
    }
}

// checking log in
function loginCheck($uName, $pass)
{
    global $userReg;
    $emailFound = false;
    $wrongPass = true;

    foreach ($userReg as $user) {
        if ($user["email"] == $uName) {
            if ($user["pass"] == $pass) {
                return "logged";
            } else if ($user["pass"] !== $pass) {
                $wrongPass = true;
            }
            $emailFound = true;
            break;
        }
    }

    if ($emailFound === false) {
        return "wrong_email";
    } else if ($wrongPass === true) {
        return "wrong_pass";
    }

    return false;
}
