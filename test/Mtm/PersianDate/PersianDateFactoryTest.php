<?php
/**
 * Created by PhpStorm.
 * User: Amin
 * Date: 9/21/2016
 * Time: 10:50 PM
 */

namespace Mtm\PersianDate;


class PersianDateFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildFromExactDate()
    {
        $hours = 19;$minutes = 20;$seconds = 59;$months = 10;$days = 19;$years = 1370;

        $persianDate = PersianDateFactory::buildFromExactDate($hours,$minutes,$seconds,$months,$days,$years);

        $expected = sprintf("%s-%s-%s %s:%s:%s",$years,$months,$days,$hours,$minutes,$seconds);

        self::assertEquals($persianDate->format("Y-m-d H:i:s"), $expected);
    }

    public function testBuildFromOriginalDateTime()
    {
        $date = new \DateTime();
        $date->setDate(1991,12,10);
        $persianDate = PersianDateFactory::buildFromOriginalDateTime($date);

        self::assertEquals($persianDate->format('Y-m-d'), "1370-09-19");
    }

}
