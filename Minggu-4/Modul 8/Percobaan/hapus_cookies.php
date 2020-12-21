<?php
    setcookie('user', '', 'time() - 3600');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hapus Cookie</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE['user'])) {
                echo 'Cookie user terhapus.';
            }
        ?>
    </body>
</html>