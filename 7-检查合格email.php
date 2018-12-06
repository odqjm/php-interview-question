<?php


function checkEmail($email)
{
    $pregEmail = "/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i";
    return preg_match($pregEmail, $email);
}

$email = 'hurddd@.com';

var_dump( filter_var($email, FILTER_VALIDATE_EMAIL) . PHP_EOL );
var_dump( checkEmail($email) . PHP_EOL );