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
    const EQUAL             = 'E';
    const SUPERIOR          = 'S';
    const SUPERIOR_OR_EQUAL = 'SE';
    const INFERIOR          = 'I';
    const INFERIOR_OR_EQUAL = 'IE';
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
        if (is_int ($min) === false) throw new \Exception('Min is not integer');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');
        if ($max < $min) throw new \Exception('Max is smaller than min');
        if (is_array ($array) === false) throw new \Exception('Array is not an array');

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
        if ($min !== 'S' && $min !== 'E' && $min !== 'SE' && $min !== 'I' && $min !== 'IE') throw new \Exception('Min have not good argument');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');
        if (is_array ($array) === false) throw new \Exception('Array is not an array');

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
        if (is_array ($array) === false) throw new \Exception('Array is not an array');
        if ($valueOrKey !== 0 && $valueOrKey !== 1) throw new \Exception('ValueOrKey, you have to chose');
        if (is_int ($key) === false && is_string ($key) === false) throw new \Exception('Argument is not a key or a value');

        $returnExist = false;

        switch ($valueOrKey){
            case self::KEY:
                if (array_key_exists ($key, $array) === true) $returnExist = true;
                break;
            case self::VALUE:
                if (in_array ($key, $array) === true) $returnExist = true;
                break;
        }
        return $returnExist;
    }
}
