# Yii2 weather widget

This widget has 3 nodes of data.
1. Currently
1. Hourly
1. Daily

How to use it.

Just add below lines in your composer.json file

`"rahulswt7/yii2-weather-widget" : "^0.1.0"`

Open your terminal and run command `composer install`

or

`composer require rahulswt7/yii2-weather-widget`

After installation

Initially `Currently weather`data will show.

```php
<?php 

echo rahulswt7\weatherWidgets\WeatherForcast::widget();

?>
```

## To show hourly weather report

```php
<?php 

echo rahulswt7\weatherWidgets\WeatherForcast::widget([
	'currently'	=>	false,
	'hourly'	=>	true
]);
?>
```

## To show daily weather report

```php
<?php 

echo rahulswt7\weatherWidgets\WeatherForcast::widget([
	'currently' =>  false,
    'hourly'    =>  false,
    'daily'     =>  true
]);

?>
```

Packagist [link](https://packagist.org/packages/rahulswt7/yii2-weather-widget "link") 

Github [link](https://github.com/rahul05ranjan/yii2-weather-widget "link") 

Issues [link](https://github.com/rahul05ranjan/yii2-weather-widget/issues "link") 
