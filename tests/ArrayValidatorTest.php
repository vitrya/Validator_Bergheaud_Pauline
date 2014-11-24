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
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::EQUAL, $strength);
        $this->assertTrue($testArray);
    }
    public function testValidatorArrayTallNotEqual() {
        $rand = rand(0,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $strength = count ($array);
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::EQUAL, $strength+1);
        $this->assertFalse($testArray);
    }
    public function testValidatorArrayTallBetween() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsBetween($array, 0, 21);
        $this->assertTrue($testArray);
    }
    public function testValidatorArrayTallNotBetween() {
        $rand = rand(22,50);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsBetween($array, 0, 21);
        $this->assertFalse($testArray);
    }
    public function testValidatorArraySuperior() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::SUPERIOR, 20);
        $this->assertTrue($testArray);
    }

    public function testValidatorArrayNotSuperior() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::SUPERIOR, 21);
        $this->assertFalse($testArray);
    }
    public function testValidatorArraySuperiorOrEqual() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::SUPERIOR_OR_EQUAL, 21);
        $this->assertTrue($testArray);
    }
    public function testValidatorArraySuperiorOrNotEqual() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::SUPERIOR_OR_EQUAL, 41);
        $this->assertFalse($testArray);
    }
    public function testValidatorArrayInferior() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::INFERIOR, 41);
        $this->assertTrue($testArray);
    }
    public function testValidatorArrayNotInferior() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::INFERIOR, 20);
        $this->assertFalse($testArray);
    }
    public function testValidatorArrayInferiorOrEqual() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::INFERIOR_OR_EQUAL, 40);
        $this->assertTrue($testArray);
    }
    public function testValidatorArrayInferiorOrNotEqual() {
        $rand = rand(21,40);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [] = 1;
        }
        $testArray = ArrayValidator::numberElementsComparison($array, ArrayValidator::INFERIOR_OR_EQUAL, 20);
        $this->assertFalse($testArray);
    }

    public function testValidatorArrayValue() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [$i] = 'a';
        }
        $testArray = ArrayValidator::keyExists($array,ArrayValidator::VALUE, 'a' );
        $this->assertTrue($testArray);

    }
    public function testValidatorArrayNotValue() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [$i] = 'a';
        }
        $testArray = ArrayValidator::keyExists($array,ArrayValidator::VALUE, 'b' );
        $this->assertFalse($testArray);

    }
    public function testValidatorArrayKey() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i <= $rand; $i++) {
            $array [$i] = 'a';
        }
        $testArray = ArrayValidator::keyExists($array,ArrayValidator::KEY, '1' );
        $this->assertTrue($testArray);

    }
    public function testValidatorArrayNotKey() {
        $rand = rand(1,20);
        $array = [];
        for ($i = 0; $i < $rand; $i++) {
            $array [$i] = 'a';
        }
        $testArray = ArrayValidator::keyExists($array,ArrayValidator::KEY, '30' );
        $this->assertFalse($testArray);

    }

} 