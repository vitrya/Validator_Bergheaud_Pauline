<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 22/11/2014
 * Time: 16:41
 */

namespace Pauline\Validator;

/**
 * Class IntegerValidator
 * @package Pauline\Validator
 */
class IntegerValidator
{

    const PLUS_INFINITY  = 'P';
    const MINUS_INFINITY = 'M';

    /**
     * @param $integer
     * @param $number
     * @return string
     * @throws \Exception
     */
    public static function equal ($integer, $number) {
        if (is_int ($integer) === false) throw new \Exception('Integer not integer');
        if (is_int ($number) === false) throw new \Exception('Number not integer');
        $bool = ($number === $integer) ? true : false;
        return $bool;
    }

    /**
     * @param $test
     * @param int|string $min
     * @param int|string $max
     * @throws \Exception min include
     * max include
     * @return string
     */

    public static function between($test, $min = 0, $max = self::PLUS_INFINITY) {
        if (is_int ($test) === false) throw new \Exception('test is not integer');
        if (is_int ($min) === false && $min !== 'M') throw new \Exception('min is not integer or minimum');
        if (is_int ($max) === false && $max !== 'P') throw new \Exception('max is not integer or maximum');
        if ($min > $max) throw new \Exception('max smaller than min');

        /*
       $boolMax = $boolMin = False;

        if ($min === 'M'){
            $boolMin = True;
        } else if ($test >= $min){
            $boolMin = True;
        }

        if ($max === 'P'){
            $boolMax = True;
        } else if ($test <= $max){
            $boolMax = True;
        }
        */

        $boolMin = ($min === 'M' || $test >= $min) ? true : false;
        $boolMax = ($max === 'P' || $test <= $max) ? true : false;

        $bool = ($boolMin === true && $boolMax === true) ? true : false;

        return $bool;
    }
}
