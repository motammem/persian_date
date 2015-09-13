<?php

/*
 * This file is part of the Mtm packages.
 *
 * (c) Amin Alizade <motammem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mtm\PersianDate;

/**
 * This class is responsible to build Persian DateTime instances.
 *
 * @package Mtm\PersianDate
 */
class Factory
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
     * @return DateTime
     */
    static function buildFromExactDate($hour = null, $minute = null, $second = null, $month = null, $day = null, $year = null, $is_dst = -1)
    {
        if (!$hour and !$minute and !$second and !$month and !$day and !$year) {
            $timestamp = mktime();
        } else {
            list($gy, $gm, $gd) = Converter::jalali_to_gregorian($year, $month, $day);
            $timestamp = mktime($hour, $minute, $second, $gm, $gd, $gy, $is_dst);
        }

        $object = new DateTime();
        $object->setTimestamp($timestamp);
        return $object;
    }

    /**
     * Bulid PersianDateTime instance from original PHP DateTime object.
     *
     * @param \DateTime $dateTime
     * @return DateTime
     */
    static function buildFromOriginalDateTime(\DateTime $dateTime)
    {
        $object = new DateTime();
        $object->setTimezone($dateTime->getTimezone());
        $object->setTimestamp($dateTime->getTimestamp());
        return $object;
    }
}