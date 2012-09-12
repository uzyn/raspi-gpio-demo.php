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

function onOff($in) {
	if ($in) return 'on';
	else return 'off';
}
?>
<h1>Welcome to my RasPi</h1>

<h2>LEDs are:</h2>

<ol>
	<?php for ($i = 0; $i < 3; ++$i): ?>
		<li><?php onOff($status['leds'][$i]); ?></li>
	<?php endfor; ?>
	
</ol>

<?php print_r($status); ?>