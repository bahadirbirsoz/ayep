<?php

$time = time();
$tarih = '04-16-2017 10:30 Sunday';


echo strtotime($tarih);


$tarihArr = explode(" ", $tarih);
$tarihBasArr = explode("-", $tarihArr[0]);
$saatArr = explode(":", $tarihArr[1]);
//var_dump($tarihBasArr);

$time = mktime($saatArr[0], $saatArr[1], 0, $tarihBasArr[1], $tarihBasArr[2]);

//echo $time;


$date = new DateTime('2017-02-10');
echo $date->format(DATE_RFC1123);

