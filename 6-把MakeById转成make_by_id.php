<?php

// 把MakeById转成make_by_id
function isUpperChar($char) {
	return (strtoupper($char) == $char);
}

$str = 'MakeById';
$len = strlen($str);
for ($i = 0; $i < $len; $i++) {
	$char = $str[$i];
	$bool = isUpperChar($char);
	if ($bool) {
		echo ($i == 0) ? strtolower($char) : '_' . strtolower($char);
	} else {
		echo $char;
	}
}