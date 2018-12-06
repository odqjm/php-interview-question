<?php

# 2
$test = 'aaaaaa';
$abc = & $test;
unset($test);
echo $abc;