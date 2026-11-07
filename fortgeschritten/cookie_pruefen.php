<?php
setcookie("dummy_cookie", "dummy", time() + 3600, "/");
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        if(count($_COOKIE) > 0) {
            echo "Cookies sind aktiviert";
        } else {
            echo "Cookies sind nicht aktiviert";
        }
        ?>
    </body>
</html>