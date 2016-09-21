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


class PersianDateTest extends \PHPUnit_Framework_TestCase
{
    public function testGetOriginalDateTime()
    {
        $date = new \DateTime();
        $originalDate = (new PersianDate())->getOriginalDateTime();
        $format = "Y-m-d H:i:s";
        self::assertEquals($date->format($format), $originalDate->format($format));
    }

    public function testSetDate()
    {
        $date = new PersianDate();
        $date->setDate(1370, 9, 19);
        $format = "Y-m-d";
        self::assertEquals($date->format($format), "1370-09-19");
    }

    # this method fully tested in dependent library
    public function testFormat(){}


}