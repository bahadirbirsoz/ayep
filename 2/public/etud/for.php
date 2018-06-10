<?php

for($satir = 0;$satir < 10;$satir++){
	echo "*";
		
	for( $karakter= 0;$karakter < $satir ; $karakter++)
	{
		echo chr($karakter+65);
	}

	echo "\n";
}


/**
	"0" => FALSE
	"" => FALSE
	" " => TRUE
*/

var_dump( FALSE || " "  );