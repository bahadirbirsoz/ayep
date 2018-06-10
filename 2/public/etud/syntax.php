<?php

$sayi1 = 17;
$sayi2 = 22;
$toplam = $sayi2 + $sayi1;


$herhangibir = "Hello";
$str2 = "World";

$herhangibir = $herhangibir . " World";

echo "asd";
echo "\n";
echo "qwe";

$herhangibir .= " World";

echo "\n";
ECHO time();

echo "\n\n\n";

$arr =array(1,2,3);

/*$arr =[
	"Matematik","Fizik","Kimya"
];*/

print_r($arr);

foreach($arr as &$val){
	$val++;
}

$val ++;


print_r($arr);


