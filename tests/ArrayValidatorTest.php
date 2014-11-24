<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 24/11/2014
 * Time: 00:26
 */

namespace tests\Pauline\Validator;

use Pauline\Validator\ArrayValidator;

class ArrayValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testValidatorArrayTallEqual() {
        $rand = rand(0,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $strength = count ($array);
        $testArray = ArrayValidator::numberElementsBetween($array, ArrayValidator::EQUAL, $strength);
        $this->assertTrue($testArray);
    }
    public function testValidatorArrayTallBetweenl() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsBetween($array, 0, 21);
        $this->assertTrue($testArray);
    }
    public function testValidatorArrayNotSuperior() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsBetween($array, ArrayValidator::SUPERIOR, 21);
        $this->assertFalse($testArray);
    }

} 