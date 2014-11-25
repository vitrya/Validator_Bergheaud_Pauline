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
        $dateTest = DateTimeValidator::isYear($date, $date->format('Y'));
        $this->assertTrue($dateTest);
    }
    public function testValidatorDateTimeIsNotYear(){
        $date = new \DateTime();
        $dateTest = DateTimeValidator::isYear($date, 2000);
        $this->assertFalse($dateTest);
    }
    public function testValidatorDateTimeIsDate(){
        $date = new \DateTime();
        $dateTest = DateTimeValidator::isYear($date, $date->format('Y'), $date->format('m'), $date->format('d'));
        $this->assertTrue($dateTest);
    }
    public function testValidatorDateTimeIsNotDate(){
        $date = new \DateTime();
        $dateTest = DateTimeValidator::isYear($date, 2000, $date->format('m'), $date->format('d'));
        $this->assertFalse($dateTest);
    }
}
