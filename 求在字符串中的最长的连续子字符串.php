<?php

// 在字符串中的最长的连续子字符串

$str = 'AABAAAA';

$char_list = str_split($str);
$char_list = array_unique($char_list);

$maxLength = 0;
$theChar = '';

foreach ($char_list as $char) {

	$tryRepeat = 1;
	while($tryRepeat) {
		$substr = str_repeat($char, $tryRepeat);
		if (!strstr($str, $substr)) {
			break;
		}
		$tryRepeat++;
	}

	$len = $tryRepeat - 1;
	if ($len > $maxLength) {
		$maxLength = $len;
		$theChar = $char;
	}
}

echo $maxLength . PHP_EOL;
echo $theChar . PHP_EOL;