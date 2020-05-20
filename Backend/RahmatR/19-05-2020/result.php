<!DOCTYPE html>
<html lang="en">
<body>
    <h3>
        <?php
            if ($_GET['status'] == 'success') echo "Selamat Anda berhasil login!";
            else echo "Maaf, Anda gagal login!";
        ?>
    </h3>

    <h3><a href="log.txt" target="_blank">Lihat pengguna yang berhasil login di sini</a></h3>

</body>
</html>