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
class StringValidator
{
    const SUPERIOR = 'S';
    const INFERIOR = 'I';
    const EQUAL    = 'E';
    /**
     * @param string $string
     * @return boolean
     * @throws \Exception
     */
    public static function noWhiteSpace ($string) {
        if (false === is_string ($string)) throw new \Exception('String is not a string');
        $returnString = ((substr_count ($string, ' ')) === 0) ? true : false;
        return $returnString;
    }
    /**
     * @param string $string
     * @param int $min
     * @param int $max
     * @return boolean
     * @throws \Exception
     */
    public static function lengthBetween ($string, $min = 0, $max) {
        if (false === is_string ($string)) throw new \Exception('String is not a string');
        if (false === is_int ($min)) throw new \Exception('Min is not integer');
        if (false === is_int ($max)) throw new \Exception('Max is not integer');
        if ($max < $min) throw new \Exception('Max smaller than min');
        $length       = strlen ($string);
        $returnString = ($length < $max && $length > $min) ? true : false;
        return $returnString;
    }
    /**
     * @param string $string
     * @param string $min
     * @param int $max
     * @return bool
     * @throws \Exception
     */
    public static function lengthComparison ($string, $min, $max) {
        if (false === is_string ($string)) throw new \Exception('String is not a string');
        if (false === in_array ($min, [
                self::EQUAL,
                self::SUPERIOR,
                self::INFERIOR,
            ])){
            throw new \Exception('Not good argument');        }
        if (false === is_int ($max)) throw new \Exception('Max is not integer');
        $length       = strlen ($string);
        $returnString = (($min === self::INFERIOR && $length < $max) || ($min === self::SUPERIOR && $length > $max) || $min === self::EQUAL && $length === $max) ? true : false;
        return $returnString;
    }
}
