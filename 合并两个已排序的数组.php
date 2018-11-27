<?php


function mergeBoth($list, $list2) {
	$both = array_merge($list, $list2);
	sort($both);
	return $both;
}

$list = range(1,5);
print_r(mergeBoth($list, $list));