<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 24/11/2014
 * Time: 00:17
 */

namespace Pauline\Validator;


/**
 * Class ArrayValidator
 * @package Pauline\Validator
 */

class ArrayValidator
{
    const EQUAL             = 0;
    const SUPERIOR          = 1;
    const SUPERIOR_OR_EQUAL = 2;
    const INFERIOR          = 3;
    const INFERIOR_OR_EQUAL = 4;
    const KEY               = 0;
    const VALUE             = 1;

    /**
     * @param $array
     * @param int $min
     * @param $max
     * @return bool
     * @throws \Exception
     */
    public static function numberElementsBetween($array, $min = 0, $max) {
        if (false === is_int ($min)) throw new \Exception('Min is not integer');
        if (false === is_int ($max)) throw new \Exception('Max is not integer');
        if ($max < $min) throw new \Exception('Max is smaller than min');
        if (false === is_array ($array)) throw new \Exception('Array is not an array');

        $length            = count ($array);
        $boolNumberElement = ($length >= $min && $length <= $max) ? true : false;

        return $boolNumberElement;
    }

    /**
     * @param $array
     * @param string $min
     * @param int $max
     * @return bool
     * @throws \Exception
     */
    public static function numberElementsComparison($array, $min = self::EQUAL, $max) {
        if (false === in_array ($min, [
                self::EQUAL,
                self::SUPERIOR,
                self::SUPERIOR_OR_EQUAL,
                self::INFERIOR,
                self::INFERIOR_OR_EQUAL,
            ])){
            throw new \Exception('Bad sting');
        }
        if (false === is_int ($max)) throw new \Exception('Max is not integer');
        if (false === is_array ($array)) throw new \Exception('Array is not an array');

        $length            = count ($array);
        $boolNumberElement = (($min === self::EQUAL && $length === $max) || ($min === self::SUPERIOR && $length > $max) || ($min === self::SUPERIOR_OR_EQUAL && $length >= $max) || ($min === self::INFERIOR && $length < $max) || ($min === self::INFERIOR_OR_EQUAL && $length <= $max)) ? true : false;

        return $boolNumberElement;
    }

    /**
     * @param $array
     * @param string $valueOrKey
     * @param string|int $key
     * @return bool
     * @throws \Exception
     */
    public static function keyExists($array, $valueOrKey, $key) {
        if (false === is_array ($array)) throw new \Exception('Array is not an array');
        if (false === in_array ($valueOrKey, [
                self::KEY,
                self::VALUE,
            ])){
            throw new \Exception('ValueOrKey, you have to chose');
        }
        if (false === is_int ($key) && false === is_string ($key)) throw new \Exception('Argument is not a key or a value');

        $returnExist = (($valueOrKey === self::KEY && array_key_exists ($key, $array) === true) || ($valueOrKey === self::VALUE && in_array ($key, $array) === true)) ? true : false;
        return $returnExist;
    }
}
