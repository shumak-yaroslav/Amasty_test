<?php

$test = $argv[1];
$test2 = $argv[1];
$array = [];
$arr = preg_split("/[\s,]+/", $test);
$arr1 = preg_split("/[\s,]+/", $test2);
for ($i=0; $i < count($arr) ; $i++) {
	$ar = intval($arr[$i]);
	if (strval($ar) == $arr1[$i]) {
		array_push($array, strval($ar));
	}
}
 sort($array);
for ($i=0; $i < count($array) ; $i++) { 
	echo $array[$i]." ";
}

?>
