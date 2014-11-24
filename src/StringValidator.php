<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 17:46
 */

namespace Pauline\Validator;


/**
 * Class StringValidator
 * @package Pauline\Validator
 */
/**
 * Class StringValidator
 * @package Pauline\Validator
 */
/**
 * Class StringValidator
 * @package Pauline\Validator
 */
class StringValidator
{
    const SUPERIOR = 'S';
    const INFERIOR = 'I';
    /**
     * @param $string
     * @return boolean
     * @throws \Exception
     */
    public static function noWhiteSpace ($string) {
        if (is_string ($string) === false) throw new \Exception('String is not a string');
        $returnString = ((substr_count ($string, ' ')) === 0) ? true : false;
        return $returnString;
    }

    /**
     * @param $string
     * @param int $min
     * @param $max
     * @return boolean
     * @throws \Exception
     */
    public static function lengthBetween ($string, $min = 0, $max) {
        if (is_string ($string) === false) throw new \Exception('String is not a string');
        if (is_int ($min) === false && $min !== 'S' && $min !== 'I') throw new \Exception('Min is not integer');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');
        if ($max < $min) throw new \Exception('Max smaller than min');

        $length       = strlen ($string);
        $returnString = false;

        if ($min === self::INFERIOR) {
            if ($length < $max) $returnString = true;
        }
        if ($min === self::SUPERIOR) {
            if ($length > $max) $returnString = true;
        }
        if (is_int ($min) === true){
            if ($length < $max && $length > $min) $returnString = true;
        }
        return $returnString;
    }
}
