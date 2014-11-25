<?php
/**
 * Created by PhpStorm.
 * User: P
 * Date: 24/11/2014
 * Time: 19:07
 */

namespace Pauline\Validator;


/**
 * Class DateTimeValidator
 * @package Pauline\Validator
 */
class DateTimeValidator
{
    /**
     * @param \dateTime $dateTime
     * @param $year
     * @return bool
     */
    public static function isYear(\dateTime $dateTime, $year) {
        $resDat = (intval($dateTime->format('Y')) === intval($year)) ? true : false;
        return $resDat;
    }

    /**
     * @param \dateTime $dateTime
     * @param $year
     * @param $month
     * @param $day
     * @return bool
     */
    public static function isDate(\dateTime $dateTime, $year, $month, $day) {
        $resDat = (intval($dateTime->format('Y')) === intval($year) && intval($dateTime->format('m')) === intval($month) && intval($dateTime->format('d')) === intval($day)) ? true : false;
        return $resDat;
    }
}
