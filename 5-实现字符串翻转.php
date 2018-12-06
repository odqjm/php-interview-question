<?php
/**
 * NAME: 实现字符串翻转.php
 * Author: eps
 * DateTime: 12/6/2018 12:09 PM
 */

$stringList = [
    '中文字符串',
    '中A英B文C字D符E串',
    'ABCDE',
    'ababa',
    '哈哈哈哈',
    '++--**//'
];

/**
 * 使用逆序数组的形式将字符串翻转
 * @Author: eps
 * @DateTime 12/6/2018 12:09 PM
 * @param $string
 * @return string
 */
function strRevByKrSort($string)
{
    if (!is_string($string) || !mb_check_encoding($string, 'UTF-8')) {
        return '';
    }
    $length = mb_strlen($string, 'UTF-8');
    if ($length <= 0) {
        return '';
    }

    $list = [];
    for ($i = 0; $i < $length; $i++) {
        $list[] = mb_substr($string, $i, 1, 'UTF-8');
    }
    krsort($list);
    return implode($list);
}

foreach ($stringList as $string) {
    echo strRevByKrSort($string) . PHP_EOL;
}