# 1 #
```php
$time = strtotime('2018-07-31');
echo date("Y-m-d", strtotime("-1 month", $time));
```

# 2 #
```php
$test = 'aaaaaa';
$abc = & $test;
unset($test);
echo $abc;
```

# 3 #
```php
var_dump(1 == '000001');
```