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


class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testFormat()
    {
        $datetime = new DateTime();
        $format = "Y-m-d";
        $datetime->setDate(1370, 9, 19);
        $result = $datetime->format($format);

        $this->assertSame($result, '1370-09-19');
    }
}