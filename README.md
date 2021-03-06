# Persian Date (Object Oriented API)
---
[![Stable release](https://poser.pugx.org/mtm/persian-date/version.svg)](https://packagist.org/packages/mtm/persian-date)
[![Total Downloads](https://poser.pugx.org/mtm/persian-date/downloads)](https://packagist.org/packages/mtm/persian-date)
[![License](https://poser.pugx.org/mtm/persian-date/license)](https://packagist.org/packages/mtm/persian-date)
[![Build Status](https://travis-ci.org/motammem/persian_date.svg?branch=master)](https://travis-ci.org/motammem/persian_date)


This project provides an easy to use Object Oriented API to work with persian date and time.

Provided `PersianDate` class extends Standard PHP `DateTime` class and has it's all capabilities.

###Installation:
Open your terminal and enter:

```php
composer require mtm/persian-date
```

###Usage:

When you want build a PersianDate instance:
```php
$persianDateTime = new Mtm\PersianDate\PersianDate();
```


When you want build a PersianDate instance from exact date:
```php
$persianDateTime = Mtm\PersianDate\PersianDateFactory::buildFromExactDate(null, null, null, 9, 19 ,1370);
```

When you want to convert PHP Standard Datetime to  PersianDate instance from standard PHP Standard DateTime object:
```php
$standardDateTime = new \DateTime();
$persianDateTime = Mtm\PersianDate\PersianDateFactory::buildFromOriginalDateTime($standardDateTime);
```

When you want to convert PersianDate instance to PHP Standard DateTime object:
```php
$standardDateTime = $persianDateTime->getOriginalDateTime();
```

When you want to set date on PersianDate instance
```php
$persian_year = 1370;
$persian_month = 9;
$persian_day = 19;

$persianDateTime->setDate($persian_year, $persian_month, $persian_day);
```

### Formats
And finally when you want to print in various formats:


```php
$persianDateTime->format("Y-m-d"); // prints: 1370-9-19

$persianDateTime->format("f y"); // prints: پاییز 94
```

<table>

<tbody>

<tr>

<td>(?)</td>

<td>مثال ۲</td>

<td>مثال ۱</td>

<td>دامنه</td>

<td>کاربرد های متد format()</td>

<td>کاراکتر</td>

</tr>

<tr>

<td>-</td>

<td>-</td>

<td>-</td>

<td>-</td>

<td>کاراکترها با حروف کوچک</td>

<td>کوچک</td>

</tr>

<tr>

<td>+</td>

<td>ب.ظ</td>

<td>ق.ظ</td>

<td>ق.ظ | ب.ظ</td>

<td>اوقات روز - به صورت خلاصه</td>

<td>a</td>

</tr>

<tr>

<td>!</td>

<td>۴</td>

<td>۱</td>

<td>۱ - ۴</td>

<td>شماره ی فصل (ربع) از سال</td>

<td>b</td>

</tr>

<tr>

<td>+</td>

<td>۱۳۸۹/۱۱/۲۲ ،۰۹:۴۶:۳۱ +۰۳:۳۰</td>

<td>۱۳۹۰/۴/۴ ،۱۳:۰۸:۲۶ +۰۴:۳۰</td>

<td>: طبق نمونه</td>

<td>Y/n/j ,H:i:s P :(ltr) ۱ قالب مرکّب</td>

<td>c</td>

</tr>

<tr>

<td>+</td>

<td>۲۳</td>

<td>۹</td>

<td>۰۱ - ۳۱</td>

<td>شماره ی روز از ماه - ۲ رقمی</td>

<td>d</td>

</tr>

<tr>

<td>+</td>

<td>Asia/Tehran</td>

<td>Greenwich</td>

<td>مناطق زمانی</td>

<td>منطقه ی زمانی تنظیم شده</td>

<td>e</td>

</tr>

<tr>

<td>!</td>

<td>زمستان</td>

<td>تابستان</td>

<td>بهار تا زمستان</td>

<td>نام فصل با حروف فارسی</td>

<td>f</td>

</tr>

<tr>

<td>+</td>

<td>۱۲</td>

<td>۷</td>

<td>۱ - ۱۲</td>

<td>ساعت در روز -۱۲ساعته -۱یا۲رقمی</td>

<td>g</td>

</tr>

<tr>

<td>+</td>

<td>۱۲</td>

<td>۰۷</td>

<td>۰۱ - ۱۲</td>

<td>ساعت در روز - ۱۲ ساعته - ۲رقمی</td>

<td>h</td>

</tr>

<tr>

<td>+</td>

<td>۲۱</td>

<td>۱۷</td>

<td>۰۰ - ۵۹</td>

<td>دقیقه در ساعت - ۲ رقمی</td>

<td>i</td>

</tr>

<tr>

<td>+</td>

<td>۲۳</td>

<td>۲</td>

<td>۱ - ۳۱</td>

<td>شماره ی روز از ماه - ۱یا۲ رقمی</td>

<td>j</td>

</tr>

<tr>

<td>!</td>

<td>۱۶</td>

<td>۷۶.۲</td>

<td>۰ - ۱۰۰</td>

<td>(**.?) در صد باقیمانده از سال</td>

<td>k</td>

</tr>

<tr>

<td>+</td>

<td>چهار شنبه</td>

<td>شنبه</td>

<td>شنبه تا جمعه</td>

<td>نام روز در هفته - کامل</td>

<td>l</td>

</tr>

<tr>

<td>+</td>

<td>۱۰</td>

<td>۰۳</td>

<td>۰۱ - ۱۲</td>

<td>شماره ی ماه از سال - ۲رقمی</td>

<td>m</td>

</tr>

<tr>

<td>+</td>

<td>۱۰</td>

<td>۳</td>

<td>۱ - ۱۲</td>

<td>شماره ی ماه از سال - ۱یا۲رقمی</td>

<td>n</td>

</tr>

<tr>

<td>+</td>

<td>۱۳۸۹</td>

<td>۱۳۹۱</td>

<td>شماره ی سال</td>

<td>سال هفته ای (به عدد) چهار رقمی</td>

<td>o</td>

</tr>

<tr>

<td>!</td>

<td>دلو</td>

<td>جوزا</td>

<td>حمل تا حوت</td>

<td>نام باستانی برج ها</td>

<td>p</td>

</tr>

<tr>

<td>!</td>

<td>پلنگ</td>

<td>گاو</td>

<td>موش تا خوک</td>

<td>نام حیوانی سال ها</td>

<td>q</td>

</tr>

<tr>

<td>+</td>

<td>۰۹:۴۶:۳۱ +۰۳۳۰ جمعه، ۲۲ بهمن ۱۳۸۹</td>

<td>۱۳:۰۸:۲۶ +۰۴۳۰ شنبه، ۴ تیر ۱۳۹۰</td>

<td>: طبق نمونه</td>

<td>H:i:s O Y F j ,l :(ltr) ۲ قالب مرکّب</td>

<td>r</td>

</tr>

<tr>

<td>+</td>

<td>۱۷</td>

<td>۰۹</td>

<td>۰۰ - ۵۹</td>

<td>شماره ی ثانیه در دقیقه - ۲ رقمی</td>

<td>s</td>

</tr>

<tr>

<td>+</td>

<td>۳۰</td>

<td>۳۱</td>

<td>۳۱ | ۳۰ | ۲۹</td>

<td>تعداد روزهای (همان) ماه</td>

<td>t</td>

</tr>

<tr>

<td>+</td>

<td>۷۳۹۰۳۱</td>

<td>۰۰۰۰۰۰</td>

<td>: طبق نمونه</td>

<td>میکرو ثانیه - ۶ رقمی</td>

<td>u</td>

</tr>

<tr>

<td>!</td>

<td>هشتاد و نه</td>

<td>نود و یک</td>

<td>از ‍ تا نود و نه</td>

<td>سال به حروف - خلاصه ی دو رقمی</td>

<td>v</td>

</tr>

<tr>

<td>+</td>

<td>۳</td>

<td>۰</td>

<td>۰ - ۶</td>

<td>شنبه=۰ ،عدد روز در هفته (IR)</td>

<td>w</td>

</tr>

<tr>

<td>+</td>

<td>۸۹</td>

<td>۹۱</td>

<td>۰۰ - ۹۹</td>

<td>سال (به عدد) دو رقمی</td>

<td>y</td>

</tr>

<tr>

<td>+</td>

<td>۳۰۴</td>

<td>۴۱</td>

<td>۰ - (۳۶۴|۳۶۵)</td>

<td>تعداد روز (کامل) گذشته از سال</td>

<td>z</td>

</tr>

<tr>

<td>-</td>

<td>-</td>

<td>-</td>

<td>-</td>

<td>کاراکترها با حروف بزرگ</td>

<td>بزرگ</td>

</tr>

<tr>

<td>+</td>

<td>بعد از ظهر</td>

<td>قبل از ظهر</td>

<td>: طبق نمونه</td>

<td>اوقات روز _ کامل</td>

<td>A</td>

</tr>

<tr>

<td>+</td>

<td>۷۱۰</td>

<td>۰۹۸</td>

<td>۰۰۰ - ۹۹۹</td>

<td>GMTزمان اینترنتی،۱.۴۴ دق‍ از۲۳:۰۰</td>

<td>B</td>

</tr>

<tr>

<td>!</td>

<td>۱۵</td>

<td>۱۴</td>

<td>...|۱۵|۱۴|...</td>

<td>شماره ی قرن هجری شمسی</td>

<td>C</td>

</tr>

<tr>

<td>+</td>

<td>چ</td>

<td>ش</td>

<td>ش تا ج</td>

<td>حرف اوّل نام روز هفته، ش=شنبه</td>

<td>D</td>

</tr>

<tr>

<td>+</td>

<td>دی</td>

<td>خرداد</td>

<td>فروردین تا اسفند</td>

<td>نام ماه از سال - کامل</td>

<td>F</td>

</tr>

<tr>

<td>+</td>

<td>۱۹</td>

<td>۷</td>

<td>۰ - ۲۳</td>

<td>ساعت در روز - ۲۴ساعته -۱یا۲رقم</td>

<td>G</td>

</tr>

<tr>

<td>+</td>

<td>۱۹</td>

<td>۰۷</td>

<td>۰۰ - ۲۳</td>

<td>ساعت در روز - ۲۴ساعته -۲رقمی</td>

<td>H</td>

</tr>

<tr>

<td>+</td>

<td>۱</td>

<td>۰</td>

<td>۰ | ۱</td>

<td>نشانگر طولانی بودن روز = ۱</td>

<td>I</td>

</tr>

<tr>

<td>!</td>

<td>بیست و نه</td>

<td>دو</td>

<td>یک تا سی و یک</td>

<td>شماره ی روز از ماه به حروف</td>

<td>J</td>

</tr>

<tr>

<td>!</td>

<td>۸۳.۳</td>

<td>۱۴</td>

<td>۱۰۰ - ۰</td>

<td>(**.?) در صد گذشته از سال</td>

<td>K</td>

</tr>

<tr>

<td>+</td>

<td>۰</td>

<td>۱</td>

<td>۰ | ۱</td>

<td>سال : کبیسه=۱ و غیر کبیسه=۰</td>

<td>L</td>

</tr>

<tr>

<td>+</td>

<td>دی</td>

<td>خر</td>

<td>فر تا اس‍</td>

<td>نام ماه از سال - خلاصه</td>

<td>M</td>

</tr>

<tr>

<td>+</td>

<td>۳</td>

<td>۷</td>

<td>۱ - ۷</td>

<td>یک شنبه=۱ ،عدد روز در هفته (IR)</td>

<td>N</td>

</tr>

<tr>

<td>+</td>

<td>+۰۳۳۰</td>

<td>+۰۴۳۰</td>

<td>-۱۲۰۰ ، +۱۴۰۰</td>

<td>":" اختلاف ساعت جهانی - بدون</td>

<td>O</td>

</tr>

<tr>

<td>+</td>

<td>+۰۳:۳۰</td>

<td>+۰۴:۳۰</td>

<td>-۱۲:۰۰ ، +۱۴:۰۰</td>

<td>":" اختلاف ساعت جهانی - با</td>

<td>P</td>

</tr>

<tr>

<td>!</td>

<td>۶۱</td>

<td>۳۲۴</td>

<td>(۳۶۵|۳۶۴) - ۰</td>

<td>تعداد روز (کامل) باقی مانده از سال</td>

<td>Q</td>

</tr>

<tr>

<td>+</td>

<td>ام</td>

<td>ام</td>

<td>ام</td>

<td>"واژه ی "ام</td>

<td>S</td>

</tr>

<tr>

<td>+</td>

<td>IRST</td>

<td>IRDT</td>

<td>مخفف مناطق</td>

<td>مخفّف منطقه ی زمانی تنظیم شده</td>

<td>T</td>

</tr>

<tr>

<td>+</td>

<td>۱۲۹۵۴۳۶۴۶۷</td>

<td>۱۲۴۳۹۵۵۳۴۶</td>

<td>: طبق نمونه</td>

<td>timestamp (Unix) برچسب زمانی</td>

<td>U</td>

</tr>

<tr>

<td>!</td>

<td>هزار و سیصد و هشتاد و نه</td>

<td>هزار و سیصد و نود و یک</td>

<td>: طبق نمونه</td>

<td>سال به حروف - کامل</td>

<td>V</td>

</tr>

<tr>

<td>+</td>

<td>۴۳</td>

<td>۱۱</td>

<td>۰۰ - (۵۲|۵۳)</td>

<td>شماره ی این هفته در سال - ۲رقم</td>

<td>W</td>

</tr>

<tr>

<td>+</td>

<td>۱۳۸۹</td>

<td>۱۳۹۱</td>

<td>: طبق نمونه</td>

<td>سال (به عدد) چهار رقمی</td>

<td>Y</td>

</tr>

<tr>

<td>+</td>

<td>۱۲۶۰۰</td>

<td>۱۶۲۰۰</td>

<td>-۴۳۲۰۰ ، ۵۰۴۰۰</td>

<td>اختلاف ساعت جهانی به ثانیه</td>

<td>Z</td>

</tr>

</tbody>

</table>
