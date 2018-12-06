<?php
/**
 * NAME: isset、empty、is_null的区别.php
 * Author: eps
 * DateTime: 12/6/2018 12:28 PM
 */

$object = (object)[];

// 判断变量是否定义或者是否为空
var_dump(isset($object));

// 判断变量的值是否为空，能转换为false的都是空，为空返回true，反之返回false。
var_dump(empty($object));

// 检测传入的值(值、变量、表达式)是否为null
var_dump(is_null($object));