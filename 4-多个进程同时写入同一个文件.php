<?php
/**
 * NAME: 多个进程同时写入同一个文件.php
 * Author: eps
 * DateTime: 12/6/2018 12:38 PM
 */

function writeData($path, $mode, $data)
{
    $fp = fopen($path, $mode);
    $retries = 0;
    $max_retries = 100;
    do {
        if ($retries > 0) {
            usleep(rand(1, 10000));
        }
        $retries += 1;
    } while (!flock($fp, LOCK_EX) and $retries <= $max_retries);
    if ($retries == $max_retries) {
        return false;
    }
    fwrite($fp, "$data\n");
    flock($fp, LOCK_UN);
    fclose($fp);
    return true;
}