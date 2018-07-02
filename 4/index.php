<?php

$degisken = 14;
$asd = "String";
$bool = true; //false

$isim = 'Bahadır';
$str = "Örneğin adım $isim";
$str = 'Örneğin adım $isim';

$sayi1 = 14 + 92;
$mod = 24 % 7;

for ($i = 0; $i < $mod; $i++) {

}

$arr = [33, 66, 99];

foreach ($arr as $index => &$deger) {
    $index *= 3;
    $deger /= 11;
    echo $index . " - " . $deger . "<br />";
}

$deger = 100;
print_r($arr);

/**
 *
 * // NUMERIK ISE
 *   0 => false
 *   aksi halse => true
 *
 * "0" ve boş strig => false
 * Dolu string true
 *
 */

if (0) {
    echo "TRUE";
} else {
    echo "FALSE";
}

$yetki = "asd";
switch ($yetki) {
    case "admin":
        $allow = "all";
        break;
    case "user":
        $allow = "some";
        break;
    case "guest":
        $allow = "none";
        break;
    default:
        $allow = false;
        break;
}

switch (true) {
    case true:

        break;
}

substr($str, 0, 10);


function userSayfayiGorebilirMi()
{

}

function topla($a, $b)
{
    return $a + $b;
}

function carpanlar($sayi)
{
    $bolen = 2;
    $carpanlar = [];
    while ($sayi > 1) {
        if ($sayi % $bolen == 0) {

            if (!array_key_exists($bolen, $carpanlar)) {
                $carpanlar[$bolen] = 0;
            }
            $carpanlar[$bolen]++;
            $sayi /= $bolen;
        } else {
            $bolen++;
        }
    }
    return $carpanlar;
}

$sonuc = carpanlar(24);

$hedef = 1;
foreach ($sonuc as $taban => $us) {
    $hedef *= pow($taban, $us);
}
var_dump($hedef);

$anahtarlar = array_keys($sonuc);
print_r($anahtarlar);
print_r($sonuc);


$degisken = userSayfayiGorebilirMi();
echo "\n\n";
var_dump("");


function f()
{

    return "";
}

$sonuc = f();


/*

if($ifade){

}elseif ($baskaIfade){

}else{

}
*/


$degiskenAdi = 123;
${$degiskenAdi} = "asd";
echo ${$degiskenAdi};

/**
 *
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_SESSION
 * $_COOKIES
 */

print_r($_ENV);

//print_r($_SERVER);


