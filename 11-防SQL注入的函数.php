<?php
/**
 * NAME: 防SQL注入的函数.php
 * Author: eps
 * DateTime: 12/6/2018 12:19 PM
 */

$post = [
    'name' => "A', money = '9999",
];

# 1 addslash
$name = addslashes($post['name']);
# 2 过滤关键字 update select delete insert create drop 等等

$sql = "UPDATE `user` SET `name` = '{$name}'";
echo $sql . PHP_EOL;