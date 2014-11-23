<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 14:45
 */

namespace tests\Pauline\Validator;

use Pauline\Validator\IntegerValidator;

class IntegerValidatorTest extends \PHPUnit_Framework_TestCase {

    public function testIntegerValidatorEqual()
    {
        $number = mt_rand(1,1000);
        $integer = IntegerValidator::equal($number,$number);
        $this->assertEquals('True', $integer);
    }
    public function testIntegerValidatorNotEqual()
    {
        $number = mt_rand(1,1000);
        $number2 = mt_rand(-1000,0);
        $integer = IntegerValidator::equal($number,$number2);
        $this->assertEquals('False', $integer);
    }
}
