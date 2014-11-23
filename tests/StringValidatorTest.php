<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 17:46
 */

namespace tests\Pauline\Validator;


use Pauline\Validator\StringValidator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase{
    public function testStringValidatorNotWhiteSpace()
    {
        $stringTest = 'azertyuiopqsdfghjklmwxcvbn';
        for ($i = 0; $i < 100; $i++) {
            $stringTest .= mb_substr($stringTest, mt_rand(0, (mb_strlen ($stringTest) - 1)),1);
        }
        $stringValid = StringValidator::noWhiteSpace($stringTest);
        $this->assertEquals($stringValid, 'True');
    }
    public function testStringValidatorWhiteSpace()
    {
        $string = ' b           ';

        $stringValid = StringValidator::noWhiteSpace($string);
        $this->assertEquals($stringValid, 'False');
    }



} 