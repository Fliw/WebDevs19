<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
        session_start();
        $status = isset($_SESSION['username']) ? "logged" : ( $_GET['status'] ? $_GET['status'] : false );

        switch ($status) {
            case "logged":
                $uName = $_SESSION['username'];
                echo "<h3>Selamat datang, $uName!</h3>
                      <a href='index.php?logout=$uName'>Logout</a>";
                break;
            case "wrong_email":
                echo "<h3>Email tidak terdaftar</h3>
                      <a href='index.php'>Kembali he halaman login</a>";
                break;
            case "wrong_pass":
                echo "<h3>Password salah</h3>
                      <a href='index.php'>Kembali he halaman login</a>";
                break;
            case "error":
                echo "<h3>Terjadi kesalahan</h3>
                      <a href='index.php'>Kembali he halaman login</a>";
                break;
            default:
                echo "<h3>Anda belum login</h3>
                      <a href='index.php'>ke halaman login</a>";
                break;
        }
        ?>
        <br>
        <a href="log.txt" target="_blank">Lihat pengguna yang berhasil login di sini</a>
    </body>
</html>