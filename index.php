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
$string  = 'Le php c\'est super cool, I love it!!';
$string2 = 'Test';
$array   = [
    'patate' => 'potatoes',
    'fleure' =>'flower',
    'chat' => 'cat',
    'chien' => 'dog',
];
$key    = 'chat';

echo 'Int equal: ';
echo \Pauline\Validator\IntegerValidator::equal ($integer,12);

echo '</br> Int between: ';
echo \Pauline\Validator\IntegerValidator::between ($integer, 10, 30);

echo '</br> Boolean: ';
echo \Pauline\Validator\BooleanValidator::isTrue ($boolean);

echo '</br> Space: ';
echo \Pauline\Validator\StringValidator::noWhiteSpace($string2);

echo '</br> String between: ';
echo \Pauline\Validator\StringValidator::lengthBetween($string, \Pauline\Validator\StringValidator::SUPERIOR, 50);

echo '</br>String Nomber element in array between :';
echo \Pauline\Validator\ArrayValidator::numberElementsBetween($array, \Pauline\Validator\ArrayValidator::SUPERIOR, 21);

echo '</br>key: ';
echo \Pauline\Validator\ArrayValidator::keyExists($array, $key);


