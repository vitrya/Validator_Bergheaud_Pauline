<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 22/11/2014
 * Time: 16:34
 */

require __DIR__.'/vendor/autoload.php';

$integer = 13;

//$ValidationInt = new \Pauline\Validator\IntegerValidator();

//$ValidationInt->equal($integer,12);

echo \Pauline\Validator\IntegerValidator::equal($integer,12);
