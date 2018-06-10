<?php


/**
 * http://php.net/manual/tr/function.fopen.php
 */
$fileHandler = fopen("ornek2.csv", "r");
while (($line = fgets($fileHandler)) !== false) {
    echo $line;
}
fclose($fileHandler);



