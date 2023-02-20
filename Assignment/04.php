<?php
	function whiteSpace($str) {
		return preg_match('/^[A-Za-z\s]+$/', $str);
	}
	$string1 = "Hello rabbi";
	$string2 = "Hello123 rabbi";
	if (whiteSpace($string1)) {
		echo "Welcome rabbi";
	} else {
		echo "Welcome to first Website";
	}
	
	if (whiteSpace($string2)) {
		echo "Welcome rabbi this is $$";
	} else {
		echo "this is fkfjdklfsdka";
	}
