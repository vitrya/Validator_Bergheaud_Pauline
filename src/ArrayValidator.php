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
    const KEY_OR_VALUE      = 'KV';

    public static function numberElementsBetween($array, $min = self::EQUAL, $max) {
        // if (is_int ($min) === false) throw new \Exception('Min is not integer');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');

        $length = count ($array);
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

    public static function keyExists($array, $key) {
        echo $array;
        return $key;

    }
}


