#!/usr/bin/php
<?php
require_once(dirname(dirname(__FILE__)).'/PHP-GPIO/GPIO.php');

$gpio = new GPIO();
$gpio->setup(17, "out");
$gpio->setup(18, "in");

while(true) {
	$gpio->output(17, rand(0, 1));
	
	$state = $gpio->input(18);
	echo 'LED is '.($state)?'on':'off'."\n";
	
	sleep(0.5 * 1000000);
}
