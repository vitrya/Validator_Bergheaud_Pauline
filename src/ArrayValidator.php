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

    public static function numberElementsBetween($array, $min, $max) {
        if (is_int ($min) === false ) throw new \Exception('Min is not integer');
        if (is_int ($max) === false) throw new \Exception('Max is not integer');

        return $array;


    }
    public static function keyExists($array, $key) {
        echo $array;
        return $key;

    }
}


