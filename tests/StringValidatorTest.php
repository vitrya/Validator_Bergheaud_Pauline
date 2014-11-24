<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 17:46
 */

namespace tests\Pauline\Validator;


use Pauline\Validator\StringValidator;

class StringValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testStringValidatorNotWhiteSpace() {
        $stringTest = 'azertyuiopqsdfghjklmwxcvbn';
        for ($i = 0; $i < 100; $i++) {
            $stringTest .= mb_substr($stringTest, mt_rand(0, (mb_strlen ($stringTest) - 1)),1);
        }
        $stringValid = StringValidator::noWhiteSpace($stringTest);
        $this->assertEquals($stringValid, true);
    }
    public function testStringValidatorWhiteSpace() {
        $string = ' b';
        for ($i = 0; $i < 100; $i++) {
            $string .= ' ';
        }
        $stringValid = StringValidator::noWhiteSpace($string);
        $this->assertEquals($stringValid, false);
    }
    public function testStringValidatorNotSuperior() {
        $string = 'b';
        $rand = rand(101,200);
        for ($i = 0; $i < 100; $i++) {
            $string .= 'b';
        }
        $stringValid = StringValidator::lengthComparison($string, StringValidator::SUPERIOR, $rand);
        $this->assertEquals($stringValid, false);
    }
    public function testStringValidatorSuperior() {
        $string = 'b';
        $rand = rand(1,98);
        for ($i = 0; $i < 100; $i++) {
            $string .= 'b';
        }
        $stringValid = StringValidator::lengthComparison($string, StringValidator::SUPERIOR, $rand);
        $this->assertEquals($stringValid, true);
    }
    public function testStringValidatorInferior() {
        $string = 'b';
        $rand = rand(101,200);
        for ($i = 0; $i < 100; $i++) {
            $string .= 'b';
        }
        $stringValid = StringValidator::lengthComparison($string, StringValidator::INFERIOR, $rand);
        $this->assertEquals($stringValid, true);
    }
    public function testStringValidatorNotInferior() {
        $string = 'b';
        $rand = rand(1,98);
        for ($i = 0; $i < 100; $i++) {
            $string .= 'b';
        }
        $stringValid = StringValidator::lengthComparison($string, StringValidator::INFERIOR, $rand);
        $this->assertEquals($stringValid, false);
    }
    public function testStringValidatorBetween() {
        $string = 'b';
        $rand = rand(0,99);
        $rand2 = rand(101,200);
        for ($i = 0; $i < 100; $i++) {
            $string .= 'b';
        }
        $stringValid = StringValidator::lengthBetween($string, $rand, $rand2);
        $this->assertEquals($stringValid, true);
    }
    public function testStringValidatorNotBetween() {
        $string = 'b';
        $rand2 = rand(201,300);
        $rand = rand(101,200);
        for ($i = 0; $i < 100; $i++) {
            $string .= 'b';
        }
        $stringValid = StringValidator::lengthBetween($string, $rand, $rand2);
        $this->assertEquals($stringValid, false);
    }
}
