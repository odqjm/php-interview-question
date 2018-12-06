<?php
/**
 * NAME: 合并两个数组有几种方式，并比较它们的异同.php
 * Author: eps
 * DateTime: 12/6/2018 12:41 PM
 */


$a = [1, 2, 3];
$b = [1, 2, 3];


# 1. array_merge
print_r(array_merge($a, $b));

# 2. 数组操作符 +
print_r($a + $b);

// array_merge 会引起索引的重置, 但保留值
// 数组操作符 + 会引起值的丢失