<?php
	function sortArray($arr) {
		usort($arr, function($x, $y) {
			return strlen($x) - strlen($y);
		});
		return $arr;
	}
	
	$nameList= array("rabbi", "siam", "salman", "samia");
	$sArray = sortArray($nameList);
	print_r($sArray);

