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
        $year   = intval($year);
        $resDat = (intval($dateTime->format('Y')) === $year) ? true : false;
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
        $year   = intval($year);
        $month  = intval($month);
        $day    = intval($day);
        $resDat = (intval($dateTime->format('Y')) === $year && intval($dateTime->format('m')) === $month && intval($dateTime->format('d')) === $day) ? true : false;
        return $resDat;
    }
}
