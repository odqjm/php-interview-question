<?php

# 1
$time = strtotime('2018-07-31');
echo date("Y-m-d",strtotime("-1 month", $time));