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
class StringValidator {
    /**
     * @param $string
     * @return string
     * @throws \Exception
     */
    public static function noWhiteSpace ($string)
    {
        if (is_string ($string) === false) throw new \Exception('String is not a string');
        $returnString = ((substr_count ($string, ' ')) === 0) ? 'True' : 'False';
        return $returnString;
    }

    /**
     * @param $string
     * @param $min
     * @param $max
     * @throws \Exception
     */
    public static function lengthBetween ($string, $min, $max)
    {
        if (is_string ($string) === false) throw new \Exception('String is not a string');
        if (is_int ($min) === false) throw new \Exception('Min is not integer');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');

    }
}
