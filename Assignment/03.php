<?php
	function removeFirstAndLast($array) {
		array_shift($array);
		array_pop($array);
		return $array;
	}
	$myArray = array("rabbi", "siam", "samia", "salman");
	$newArray = removeFirstAndLast($myArray);
	print_r($newArray);
