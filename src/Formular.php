<?php

/**
 * Entry Formular
 */
class Formular {

	function __toString() {
		return <<<EOT
<p><a href="/address">Returns all available address</a></p>
<form action="/address" method="POST">
	<ul>
		<li><input type="text" name="country" value="CZ"></li>
		<li><input type="text" name="city" value="Brno"></li>
		<li><input type="text" name="Street" value="Husova"></li>
		<li><input type="text" name="postalcode" value="60200"></li>
		<li><input type="text" name="number" value="6"></li>
		<li><input type="text" name="numberAddition"></li>
		<li><button name="newAddress" value="Send">Send new address"</button></li>
	</ul>
</form>
EOT;
	}
}
