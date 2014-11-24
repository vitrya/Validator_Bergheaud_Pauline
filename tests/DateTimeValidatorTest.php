<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 24/11/2014
 * Time: 21:48
 */

namespace tests\Pauline\Validator;

use Pauline\Validator\DateTimeValidator;

class DateTimeValidatorTest extends \PHPUnit_Framework_TestCase
{
    public function testValidatorDateTimeIsYear(){
        $date = new \DateTime();
        $dateTest = DateTimeValidator::isYear($date, 2014);
        $this->assertTrue($dateTest);
    }
    public function testValidatorDateTimeIsNotYear(){
        $date = new \DateTime();
        $dateTest = DateTimeValidator::isYear($date, 2015);
        $this->assertFalse($dateTest);
    }
}
