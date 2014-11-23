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
$string = 'Le php c\'est super cool, I love it!!';
$string2 = 'Test';

echo 'Int equal: ';
echo \Pauline\Validator\IntegerValidator::equal ($integer,12);

echo '</br> Int between: ';
echo \Pauline\Validator\IntegerValidator::between ($integer, 10, 30);

echo '</br> Boolean: ';
echo \Pauline\Validator\BooleanValidator::isTrue ($boolean);

echo '</br> Space: ';
echo \Pauline\Validator\StringValidator::noWhiteSpace($string2);

echo '</br> between: ';
echo \Pauline\Validator\StringValidator::lengthBetween($string, \Pauline\Validator\StringValidator::SUPERIOR, 50);

echo '</br>';
