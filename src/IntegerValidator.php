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

    const SUPERIOR          = 'S';
    const SUPERIOR_OR_EQUAL = 'SE';
    const INFERIOR          = 'I';
    const INFERIOR_OR_EQUAL = 'IE';
    const EQUAL             = 'E';


    /**
     * @param $test
     * @param int|string $min
     * @param int|string $max
     * @throws \Exception min include
     * max include
     * @return boolean
     */

    public static function between ($test, $min = 0, $max) {

        if (is_int ($test) === false) throw new \Exception('test is not integer');
        if (is_int ($min) === false) throw new \Exception('min is not integer or minimum');
        if (is_int ($max) === false) throw new \Exception('max is not integer or maximum');
        if ($min > $max) throw new \Exception('max smaller than min');

        $bool = ($test >= $min && $test <= $max) ? true : false;
        return $bool;
    }

    /**
     * @param $test
     * @param string $want
     * @param $have
     * @return bool
     * @throws \Exception
     */
    public static function comparison ($test, $want = self::EQUAL, $have) {
        if (is_int ($test) === false) throw new \Exception('test is not integer');
        if (is_int ($have) === false) throw new \Exception('have is not integer');
        if ($want !== 'E' && $want !== 'S' && $want !== 'SE' && $want !== 'I' && $want !== 'IE') throw new \Exception('have is not integer');

        $bool = (($want === self::EQUAL && $test === $have)
            || ($want === self::SUPERIOR && $test > $have) || ($want === self::SUPERIOR_OR_EQUAL && $test >= $have)
            || ($want === self::INFERIOR && $test < $have) || ($want === self::INFERIOR_OR_EQUAL && $test <= $have)) ? true : false;
        return $bool;
    }
}
