<?php
	function cR($string1, $string2) {
		$length1 = strlen($string1);
		$length2 = strlen($string2);
		$reverse2 = strrev($string2);
		$result = $string1;
		
		for ($i = $length2 - 1; $i >= 0; $i--) {
			$result .= $reverse2[$i];
		}
		
		return $result;
	}
	
	
	$string1 = "hello";
	$string2 = "world";
	$concatenated = cR($string1, $string2);
	echo $concatenated;
