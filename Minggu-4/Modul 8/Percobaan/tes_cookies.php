<?php
    setcookie('test_cookie', 'test', time() + 3600, '/');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Test Cookie</title>
    </head>
    <body>
        <?php
            if(count($_COOKIE) > 0) {
                echo "Cookies enabled.";
            } else {
                echo "Cookies disabled.";
            }
        ?>
    </body>
</html>