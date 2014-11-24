<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 17:27
 */

namespace tests\Pauline\Validator;


use Pauline\Validator\BooleanValidator;

class BooleanValidatorTest extends \PHPUnit_Framework_TestCase {
    public function testBooleanTrue()
    {
        $boolean = true;
        $test = BooleanValidator::isTrue ($boolean);
        $this->assertEquals($test, true);
    }
    public function testBooleanNotTrue()
    {
        $boolean = false;
        $test = BooleanValidator::isTrue ($boolean);
        $this->assertEquals($test, false);
    }
    public function testBooleanNotFalse()
    {
        $boolean = true;
        $test = BooleanValidator::isTrue ($boolean);
        $this->assertEquals($test, false);
    }
    public function testBooleanFalse()
    {
        $boolean = false;
        $test = BooleanValidator::isTrue ($boolean);
        $this->assertEquals($test, true);
    }

} 