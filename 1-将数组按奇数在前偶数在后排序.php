<?php

$list = [
	1,2,3,4,5,6,7,8,9,10
];

function isOdd($num) {
	return ($num & 1) == 1;
}

function isEven($num) {
	return ($num & 1) == 0;
}

function oddBeforeEven($list) {
	$begin = 0;
	$end = count($list) - 1;
	while ($begin < $end) {

		while ($begin < $end && isOdd($list[$begin]) ) {
			$begin++;
		}

		while ($begin < $end && isEven($list[$end]) ) {
			$end--;
		}

		// swap
		if ($begin < $end) {
			$t = $list[$begin];
			$list[$begin] = $list[$end];
			$list[$end] = $t;
		}

	}
	return $list;
}

print_r(oddBeforeEven($list));
