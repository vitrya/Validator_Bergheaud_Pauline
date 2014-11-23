<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 22/11/2014
 * Time: 16:41
 */

namespace Pauline\Validator;


class IntegerValidator {

    public static function equal ($integer, $numbre) {
        if (is_int ($integer) === False) throw new \Exception('Integer not integer');
        if (is_int ($numbre) === False) throw new \Exception('Number not integer');
        $bool = ($numbre === $integer) ? 'True' : 'False';
        //$bool = ($numbre === $integer) ? True : False;
        return $bool;
    }
    public static function between() {

    }
}
