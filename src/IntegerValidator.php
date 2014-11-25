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
    const SUPERIOR          = 0;
    const SUPERIOR_OR_EQUAL = 1;
    const INFERIOR          = 2;
    const INFERIOR_OR_EQUAL = 3;
    const EQUAL             = 4;
    /**
     * @param int $test
     * @param int $min
     * @param int $max
     * @throws \Exception min include
     * max include
     * @return boolean
     */
    public static function between ($test, $min = 0, $max) {
        if (false === is_int ($test)) throw new \Exception('test is not integer');
        if (false === is_int ($min)) throw new \Exception('min is not integer or minimum');
        if (false === is_int ($max)) throw new \Exception('max is not integer or maximum');
        if ($min > $max) throw new \Exception('max smaller than min');
        $bool = ($test >= $min && $test <= $max) ? true : false;
        return $bool;
    }
    /**
     * @param int $test
     * @param int $want
     * @param int $have
     * @return bool
     * @throws \Exception
     */
    public static function comparison ($test, $want = self::EQUAL, $have){
        if (false === is_int ($test)) throw new \Exception('test is not integer');
        if (false === is_int ($have)) throw new \Exception('have is not integer');
        if ($want !== self::EQUAL && $want !== self::SUPERIOR && $want !== self::SUPERIOR_OR_EQUAL && $want !== self::INFERIOR && $want !== self::INFERIOR_OR_EQUAL) throw new \Exception('have is not integer');
        $bool = (($want === self::EQUAL && $test === $have) || ($want === self::SUPERIOR && $test > $have) || ($want === self::SUPERIOR_OR_EQUAL && $test >= $have) || ($want === self::INFERIOR && $test < $have) || ($want === self::INFERIOR_OR_EQUAL && $test <= $have)) ? true : false;
        return $bool;
    }
}
