<?php

/*
 * This file is part of the Persian Date (Object Oriented API) package.
 *
 * (c) Amin Alizade <motammem@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\Mtm\PersianDate;


use Mtm\PersianDate\PersianDateConverter;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
    function testGregorianToPersian()
    {
        $persian_year = 1370;
        $persian_month = 9;
        $persian_day = 19;

        $gregorian_year = 1991;
        $gregorian_month = 12;
        $gregorian_day = 10;

        $array = PersianDateConverter::gregorian_to_jalali($gregorian_year, $gregorian_month, $gregorian_day);

        $this->assertSame(array(
            $persian_year,
            $persian_month,
            $persian_day,
        ), $array);

    }

    function testPersianToGregorian()
    {
        $persian_year = 1370;
        $persian_month = 9;
        $persian_day = 19;

        $gregorian_year = 1991;
        $gregorian_month = 12;
        $gregorian_day = 10;

        $array = PersianDateConverter::jalali_to_gregorian($persian_year, $persian_month, $persian_day);

        $this->assertSame(array(
            $gregorian_year,
            $gregorian_month,
            $gregorian_day,
        ), $array);
    }
}