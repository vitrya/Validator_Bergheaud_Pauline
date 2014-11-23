<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 17:27
 */

namespace Pauline\Validator;


class BooleanValidator {
    public static function isTrue($boolean)
    {
        if (is_bool($boolean) === false) throw new \Exception('Boolean is not boolean');
        $returnBoolean = ($boolean === true) ? 'True' : 'False';
        return $returnBoolean;
    }

} 