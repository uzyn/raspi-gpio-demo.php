#!/usr/bin/php
<?php
require_once(dirname(dirname(__FILE__)).'/PHP-GPIO/GPIO.php');

$pin = 23;

$gpio = new GPIO();
$gpio->setup($pin, "in");

while(true) {
echo $gpio->input($pin);
	
	
	usleep(0.5*100000);
}
