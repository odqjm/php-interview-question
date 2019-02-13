<?php
/**
 * 请写一个函数来检查用户提交的数据是否为整数（不区分数据类型，可以为二进制、八进制、十进制、十六进制数字）
 * Author: eps
 * DateTime: 12/11/2018 1:04 PM
 */

/**
 * checkDecimal
 * @Author: eps
 * @DateTime DATETIME
 * @param $value
 * @return bool|string
 */

/**
 * 判断数据的进制
 * @Author: eps
 * @DateTime DATETIME
 * @param $value
 * @return bool|string
 */
function checkDecimal($value)
{
    // 判断十六进制, 要求是 0x 开头
    if (strstr($value, '0x')) {
        return 'hex';
    }

    // 判断八进制, 要求是 0 开头
    if (strstr($value, '0')) {
        return 'octal';
    }

    // 判断是否是一个整数
    if (intval($value) != $value) {
        return false;
    }
}

/**
 * 判断八进制
 * @Author: eps
 * @DateTime DATETIME
 * @param $number
 * @return bool
 */
function isOctal($number)
{
    $number = substr($number, 1);
    return $number == '0' . decoct(octdec($number));
}

/**
 * 判断十六进制
 * @Author: eps
 * @DateTime DATETIME
 * @param $number
 * @return bool
 */
function isHex($number)
{
    $number = substr($number, 2);
    return $number === dechex(hexdec($number));
}

/**
 * 检查整数
 * @Author: eps
 * @DateTime DATETIME
 * @param $number
 * @return bool
 */
function isInteger($number)
{
    $number = trim(strtolower($number));

    // 判断是什么进制
    $from = checkDecimal($number);

    if (!$from) {
        return false;
    }

    if ($from == 'hex' && isHex($number)) {
        return true;
    }
    if ($from == 'octal' && isOctal($number)) {
        return true;
    }
    if (filter_var($number, FILTER_VALIDATE_INT) !== false) {
        return true;
    }
    if (isHex($number)) {
        return true;
    }
    return false;
}

# 现只适用于 正整数的判断
/*
 * TODO 负数的判断
 */

$post = ['0', '1', '0XA', '0XB', 'OXB'];

foreach ($post as $number) {
    echo $number . PHP_EOL;
    var_dump(isInteger($number));
}