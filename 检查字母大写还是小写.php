<?php

// 检查字母大写还是小写

// case 1:
function case1($char) {
	$char = ord($char);
	if ($char > 64 && $char < 91) {
		return 1;
	}
	if ($char > 96 && $char < 123) {
		return 2;
	}
}

// case 2:
function case2($char) {
	if (preg_match('/^[a-z]+$/', $str)) {
		return 2;
	} elseif (preg_match('/^[A-Z]+$/', $str)) {
		return 1;
	}
}

// case 3:
function case3($char) {
	if (strtoupper($char) === $char) {
		return 2;
	} elseif (strtolower($char) === $char) {
		return 1;
	}
}

// case 4:
function case4($char) {
	if (ctype_upper($char)) {
		return 1;
	} elseif (ctype_lower($char)) {
		return 2;
	}
}
