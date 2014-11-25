<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 23/11/2014
 * Time: 17:27
 */
namespace Pauline\Validator;

/**
 * Class BooleanValidator
 * @package Pauline\Validator
 */
class BooleanValidator
{
    /**
     * @param boolean $boolean
     * @return boolean
     * @throws \Exception
     */
    public static function isTrue ($boolean) {
        if (false === is_bool ($boolean)) throw new \Exception('Boolean is not boolean');
        $returnBoolean = ($boolean === true) ? true : false;
        return $returnBoolean;
    }
}
