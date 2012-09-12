#!/usr/bin/php
<?php
require_once(dirname(dirname(__FILE__)).'/PHP-GPIO/GPIO.php');

$gpio = new GPIO();
$gpio->setup(17, "out");

while(true) {
	echo "Turning on pin 17\n";
	$gpio->output(17, 1);
	usleep(0.5 * 1000000);
	
	echo "Turning off pin 17\n";
	$gpio->output(17, 0);
	usleep(0.5 * 1000000);
}
