<?php

// PASS BY VALUE
function selamla($str)
{
    $str .= "!";
    echo "Merhaba $str";
    return null;
}

// PASS BY REFERENCE
function greeting(&$str): String
{
    $str .= "!";
    return 13;
    return "Merhaba $str";
}

function test()
{
    $arg = func_get_args();
    print_r($arg);
}

$arr = [
    "isim" => "Bahadır",
    "soyad" => "Öztürk",
    "yas" => [1, 2, 3]
];

//print_R($arr);
//echo file_get_contents("/var/www/samle_images/woodland-road-falling-leaf-natural-38537.jpeg");
//header("Content-Type: image/jpeg");

function getPDO(): PDO
{
    return new \PDO('mysql:host=localhost;dbname=ornek;charset=utf8', "root", "");
}

$sth = getPDO()->prepare("SELECT * FROM kitaplar WHERE  baski_sayisi > ?");
$sth->execute([30000]);
$data = $sth->fetchAll(PDO::FETCH_OBJ);

print_r($data);

$isim = "Mustafa";



/*
var_dump(selamla($isim));
echo "\n";


var_dump( greeting($isim));
echo "\n";


test(1,2,3);

echo $isim;

*/
