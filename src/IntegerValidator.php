<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 22/11/2014
 * Time: 16:41
 */

namespace Pauline\Validator;


class IntegerValidator {

    public static function equal ($integer, $numbre)
    {
        if (!is_int ($integer)) throw new \Exception('Integer not integer');
        if (!is_int ($numbre)) throw new \Exception('Number not integer');
        $bool = ($numbre === $integer) ? 'True' : 'False';
        //$bool = ($numbre === $integer) ? True : False;
        return $bool;
    }
    public static function between()
    {

    }
}
