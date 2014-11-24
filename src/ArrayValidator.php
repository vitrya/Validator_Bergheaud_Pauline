<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 24/11/2014
 * Time: 00:17
 */

namespace Pauline\Validator;


class ArrayValidator
{
    const EQUAL             = 'E';
    const SUPERIOR          = 'S';
    const SUPERIOR_OR_EQUAL = 'SE';
    const INFERIOR          = 'I';
    const INFERIOR_OR_EQUAL = 'IE';
    const KEY               = 0;
    const VALUE             = 1;

    public static function numberElementsBetween($array, $min = self::EQUAL, $max) {
        if (is_int ($min) === false && $min !== 'S' && $min !== 'E' && $min !== 'SE' && $min !== 'I' && $min !== 'IE') throw new \Exception('Min is not integer');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');
        if (is_array ($array) === false) throw new \Exception('Array is not an array');

        $length            = count ($array);
        $boolNumberElement = false;

        switch ($min){
            case self::EQUAL:
                if ($length === $max) $boolNumberElement = true;
                break;
            case self::SUPERIOR:
                if ($length > $max) $boolNumberElement = true;
                break;
            case self::SUPERIOR_OR_EQUAL:
                if ($length >= $max) $boolNumberElement = true;
                break;
            case self::INFERIOR:
                if ($length < $max) $boolNumberElement = true;
                break;
            case self::INFERIOR_OR_EQUAL:
                if ($length <= $max) $boolNumberElement = true;
                break;
        }

        if (is_int ($min) === true && $min <= $max) $boolNumberElement = true;

        return $boolNumberElement;
    }

    public static function keyExists($array, $valueOrKey, $key) {
        if (is_array ($array) === false) throw new \Exception('Array is not an array');
        if ($valueOrKey ==! 0 && $valueOrKey ==! 1) throw new \Exception('ValueOrKey, you have to chose');
        if (is_int ($key) === false && is_string ($key) === false) throw new \Exception('Argument is not a key or a value');

        $returnExist = false;

        switch ($valueOrKey){
            case self::KEY:
                if (array_key_exists ($key, $array)) $returnExist = true;
                break;
            case self::VALUE:
                if (in_array ($key, $array)) $returnExist = true;
                break;
        }
        return $returnExist;
    }
}
