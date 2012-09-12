#!/usr/bin/php
<?php
require_once(dirname(dirname(__FILE__)).'/PHP-GPIO/GPIO.php');

$leds = array(4, 17, 18);

$gpio = new GPIO();

foreach ($leds as $led) {
	$gpio->setup($led, "out");
}

$i = 0;
while(true) {
	foreach ($leds as $j=>$led) {
		if ($i==$j) {
			$gpio->output($led, 1);
		}
		else {
			$gpio->output($led, 0);
		}
	}

	++$i;
	if ($i >= 3) $i = 0;
	usleep(0.5*1000000);
}
