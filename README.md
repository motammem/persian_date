This library provides an easy to use interface to work with persian date and time.

This library using `http://jdf.scr.ir/` library in background.

Here is how to use it:

When you want build a Persian DateTime instance from exact date:
```php
$persianDateTime = Mtm\PersianDate\Factory::buildFromExactDate(null, null, null, 9, 19 ,1370);
```

When you want to build Persian DateTime instance from standard PHP Standard DateTime object:
```php
$standardDateTime = new \DateTime();
$persianDateTime = Mtm\PersianDate\Factory::buildFromOriginalDateTime($standardDateTime);
```

When you want to convert Persian DateTime instance to PHP Standard DateTime object:
```php
$standardDateTime = $persianDateTime->getOriginalDateTime();
```

When you want to set date on Persian DateTime
```php
$persian_year = 1370;
$persian_month = 9;
$persian_day = 19;

$standardDateTime = $persianDateTime->setDate($persian_year, $persian_month, $persian_day);
```

And finally when you want to print in varius formats:

```php
$standardDateTime->format("Y-m-d");
```

Here is how you can format it:


This library provides an easy to use interface to work with persian date and time.

Here is how to use it:

When you want build a Persian DateTime instance from exact date:
```php
$persianDateTime = Mtm\PersianDate\Factory::buildFromExactDate(null, null, null, 9, 19 ,1370);
```

When you want to build Persian DateTime instance from standard PHP Standard DateTime object:
```php
$standardDateTime = new \DateTime();
$persianDateTime = Mtm\PersianDate\Factory::buildFromOriginalDateTime($standardDateTime);
```

When you want to convert Persian DateTime instance to PHP Standard DateTime object:
```php
$standardDateTime = $persianDateTime->getOriginalDateTime();
```

When you want to set date on Persian DateTime
```php
$persian_year = 1370;
$persian_month = 9;
$persian_day = 19;

$standardDateTime = $persianDateTime->setDate($persian_year, $persian_month, $persian_day);
```

And finally when you want to print in varius formats:

```php
$standardDateTime->format("Y-m-d"); // prints: 1370-9-19

$standardDateTime->format("f y"); // prints: پاییز 94
```
