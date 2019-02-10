<?php
/**
 * 请写一个函数来检查用户提交的数据是否为整数（不区分数据类型，可以为二进制、八进制、十进制、十六进制数字）
 * Author: eps
 * DateTime: 12/11/2018 1:04 PM
 */

// 检查十六进制
function isHex($number) {
    return $number === dechex(hexdec($number));
}

// 检查是否是整数
function isInteger($number) {
    if (!is_numeric($number)) {
        return false;
    }
    if (filter_var($number, FILTER_VALIDATE_INT) !== false) {
        return true;
    }
    if (isHex($number)) {
        return true;
    }
    return false;
}


$post = [
    '',
    '0',
    '-1',
    '9',
    '7',
    'F',
];
$value = $post[mt_rand(0, count($post) - 1)];

echo $value . PHP_EOL;
var_dump(isInteger($value));