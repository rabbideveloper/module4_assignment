<?php
	function findSecondLargest($arr) {
		$max = null;
		$secondMax = null;
		foreach ($arr as $num) {
			if ($num > $max) {
				$secondMax = $max;
				$max = $num;
			} elseif ($num > $secondMax && $num != $max) {
				$secondMax = $num;
			}
		}
		return $secondMax;
	}
	$numbers = array(2, 3, 5, 1, 6, 4);
	$secondLargest = findSecondLargest($numbers);
	echo "The second largest number is: " . $secondLargest;
