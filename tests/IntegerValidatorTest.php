<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 14:45
 */

namespace tests\Pauline\Validator;

use Pauline\Validator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testIntegerValidatorEqual()
    {
        $number = mt_rand (1,500);
        $integer = IntegerValidator::equal($number,$number);
        $this->assertEquals (true, $integer);
    }
    public function testIntegerValidatorNotEqual()
    {
        $number = mt_rand (1,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::equal ($number,$number2);
        $this->assertEquals (false, $integer);
    }
    public function testIntegerValidationBetween()
    {
        $max = mt_rand (0,500);
        $min = mt_rand (-500,0);
        $integer = IntegerValidator::between (0, $min, $max);
        $this->assertEquals (true, $integer);
    }
    public function testIntegerValidationSuperior()
    {
        $min = mt_rand (-500,0);
        $integer = IntegerValidator::between (10, $min, IntegerValidator::PLUS_INFINITY);
        $this->assertEquals (true, $integer);
    }
    public function testIntegerValidationNotInferior()
    {
        $max = mt_rand (0,500);
        $integer = IntegerValidator::between (501, IntegerValidator::MINUS_INFINITY, $max);
        $this->assertEquals (false, $integer);
    }
}
