#!/usr/bin/php
<?php
	require_once('GPIO.php');

	echo "Setting up pin 17\n";
	$gpio = new GPIO();
	$gpio->setup(17, "out");

	echo "Turning on pin 17\n";
	$gpio->output(17, 1);

	echo "Sleeping!\n";
	sleep(2);

	echo "Turning off pin 17\n";
	$gpio->output(17, 0);

	echo "Unexporting all pins\n";
	$gpio->unexportAll();
?>