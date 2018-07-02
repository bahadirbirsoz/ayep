<?php
session_start();

if (array_key_exists("mesaj", $_SESSION)) {
    echo '<p>' . $_SESSION['mesaj'] . '</p>';
    unset($_SESSION['mesaj']);
}

if ($dizin = opendir('yuklenenler')) {

    /* Dizin içeriğini taramak için doğru yöntem. */
    while (false !== ($dosya = readdir($dizin))) {
        if ($dosya == "." || $dosya == "..") {
            continue;
        }

        echo "<li><a href='tablo.php?dosya=$dosya'>$dosya</li>";
    }


    closedir($dizin);
}
?>




