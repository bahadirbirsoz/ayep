<?php

$str = "str";

$arr = [
    "1. satır", "2. satır", "3. satır"
];


file_put_contents("ornek2.csv", implode("\n", $arr));


