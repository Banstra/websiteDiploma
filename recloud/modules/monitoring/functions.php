<?php

require_once 'config.php';

#++++++++++++++++++++++++++++++
#			Скрипт - Обработчик
#++++++++++++++++++++++++++++++
function prefixOnline($value, $value2){

	$value = substr($value, -1);
	$value2 = substr($value2, -2);

	if ($value2 == "14") {
		echo "ов";
		return false;
	}

	if ($value  == "1") {
		echo "";
	}

	if ($value  == "2" || $value  == "3" || $value  == "4") {
		echo "а";
	}

	if ($value  == "0" || $value  == "5" || $value  == "6" || $value  == "7" || $value  == "8" || $value  == "9") {
		echo "ов";
	}

}

function debug($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

?>