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
        $integer = IntegerValidator::comparison($number,IntegerValidator::EQUAL,$number);
        $this->assertEquals (true, $integer);
    }
    public function testIntegerValidatorNotEqual()
    {
        $number = mt_rand (1,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number,IntegerValidator::EQUAL,$number2);
        $this->assertEquals (false, $integer);
    }
    public function testIntegerValidatorInferior()
    {
        $number = mt_rand (1,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number2,IntegerValidator::INFERIOR,$number);
        $this->assertTrue($integer);
    }
    public function testIntegerValidatorNotInferior()
    {
        $number = mt_rand (0,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number,IntegerValidator::INFERIOR,$number2);
        $this->assertFalse($integer);
    }
    public function testIntegerValidatorInferiorOrEqual()
    {
        $number = mt_rand (0,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number2,IntegerValidator::INFERIOR_OR_EQUAL,$number);
        $this->assertTrue($integer);
    }
    public function testIntegerValidatorInferiorOrNotEqual()
    {
        $number = mt_rand (1,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number,IntegerValidator::INFERIOR_OR_EQUAL,$number2);
        $this->assertFalse($integer);
    }
    public function testIntegerValidatorSuperior()
    {
        $number = mt_rand (1,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number,IntegerValidator::SUPERIOR,$number2);
        $this->assertTrue($integer);
    }
    public function testIntegerValidatorNotSuperior()
    {
        $number = mt_rand (0,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number2,IntegerValidator::SUPERIOR,$number);
        $this->assertFalse($integer);
    }
    public function testIntegerValidatorSuperiorOrEqual()
    {
        $number = mt_rand (0,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number,IntegerValidator::SUPERIOR_OR_EQUAL,$number2);
        $this->assertTrue($integer);
    }
    public function testIntegerValidatorSuperiorOrNotEqual()
    {
        $number = mt_rand (1,500);
        $number2 = mt_rand (-500,0);
        $integer = IntegerValidator::comparison($number2,IntegerValidator::SUPERIOR_OR_EQUAL,$number);
        $this->assertFalse($integer);
    }
    public function testIntegerValidationBetween()
    {
        $max = mt_rand (0,500);
        $min = mt_rand (-500,0);
        $integer = IntegerValidator::between (0, $min, $max);
        $this->assertEquals (true, $integer);
    }
    public function testIntegerValidationNotBetween()
    {
        $max = mt_rand (0,500);
        $min = mt_rand (-500,0);
        $not = mt_rand(600, 700);
        $integer = IntegerValidator::between ($not, $min, $max);
        $this->assertEquals (false, $integer);
    }

}
