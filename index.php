<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 22/11/2014
 * Time: 16:34
 */

require __DIR__.'/vendor/autoload.php';

$integer = 13;
$boolean = true;

echo \Pauline\Validator\IntegerValidator::equal ($integer,12);

echo '</br>';

echo \Pauline\Validator\IntegerValidator::between (22, 10, 30);

echo '</br>';

echo \Pauline\Validator\BooleanValidator::isTrue ($boolean);

echo '</br>';
