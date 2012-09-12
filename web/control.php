#!/usr/bin/php
<?php
require_once(dirname(dirname(__FILE__)).'/PHP-GPIO/GPIO.php');

$led = $_GET['led'];
$on = $_GET['on'];
if ($on) $on = 1; else $on = 0;

$leds = array(22, 17, 18);

$gpio = new GPIO();
$gpio->setup($leds[$led], "out");
$gpio->output($leds[$led], $on);

header('Location: /');