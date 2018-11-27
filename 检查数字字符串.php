<?php

function check_password_string($password) {
	if (!is_string($password)) {
		return 1;
	}
	if (mb_strlen($password) != 6) {
		return 2;
	}
	if (!is_numeric($password)) {
		return 3;
	}
	if (!ctype_digit($password)) {
		return 4;
	}
	if ($password < 0 || $password > 999999) {
		return 5;
	}
	return 0;
}

$passwordList = [
	'',
	'+00001',
	'-00000',
	'AR1012',
	'000000',
	'000001',
];
foreach ($passwordList as $pwd) {
	echo check_password_string($pwd) . PHP_EOL;
}