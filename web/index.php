<?php
require_once(dirname(dirname(__FILE__)).'/PHP-GPIO/GPIO.php');

$leds = array(22, 17, 18);
$button = 23;

$gpio = new GPIO();

foreach ($leds as $led) {
	$gpio->setup($led, "in");
}
$gpio->setup($button, "in");

$status = array();
foreach ($leds as $i => $led) {
	$status['leds'][$i] = $gpio->input($led);
}

?>
<h1>Welcome to my RasPi</h1>

<h2>LEDs are:</h2>


<?php print_r($status); ?>