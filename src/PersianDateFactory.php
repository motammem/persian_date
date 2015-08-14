<?php

/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 8/14/2015
 * Time: 6:03 PM
 */
class PersianDateFactory
{
    /**
     * Build PersianDateTime instance from given parameters.
     *
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @param int $month
     * @param int $day
     * @param int $year
     * @param int $is_dst
     *
     * @return PersianDate
     */
    static function buildFromExactDate($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $is_dst = -1)
    {
        if (!$hour and !$minute and !$second and !$month and !$day and !$year) {
            $timestamp = mktime();
        } else {
            list($gy, $gm, $gd) = DateConverter::jalali_to_gregorian($year, $month, $day);
            $timestamp = mktime($hour, $minute, $second, $gm, $gd, $gy, $is_dst);
        }

        $object = new PersianDate();
        $object->setTimestamp($timestamp);
        return $object;
    }

    /**
     * Bulid PersianDateTime instance from original PHP DateTime object.
     *
     * @param DateTime $dateTime
     * @return PersianDate
     */
    static function buildFromOriginalDateTime(DateTime $dateTime)
    {
        $object = new PersianDate();
        $object->setTimezone($dateTime->getTimezone());
        $object->setTimestamp($dateTime->getTimestamp());
        return $object;
    }
}