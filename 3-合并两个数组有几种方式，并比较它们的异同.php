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

// $a = [1,2,"color" => "red"];
// $b = [4,5,3,"color" => "blue"];
// print_r(array_merge($a,$b));    //相同的字符串索引 后面覆盖前面的值  相同的数字索引 重新给索引从0开始赋值   
// print_r($a + $b);               //相同的字符串索引 前面覆盖后面的值  相同的数字索引 前面的索引覆盖后面的值，后面没覆盖的继续合并
