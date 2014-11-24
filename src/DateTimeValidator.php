<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 24/11/2014
 * Time: 19:07
 */

namespace Pauline\Validator;


class DateTimeValidator
{
    public static function isYear(\dateTime $dateTime, $year) {
        if (is_int ($year) === false) throw new \Exception('Year is not integer');
        $resDat = (intval($dateTime->format('Y')) === $year) ? true : false;
        return $resDat;
    }
}
