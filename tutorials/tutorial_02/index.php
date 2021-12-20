<?php
$x = 9; //star for second part
$sa = 1;// space for second part
for ($i = 1; $i <= 11; $i++) {
	if ($i <= 6) {
		for ($space = 6; $space >= $i; $space--) {
			echo "&nbsp; ";
		}
		$v = ($i * 2) - 1;
		for ($star = 1; $star <= $v; $star++) {
			echo "*&nbsp;";
		}
		echo "<br>";
	} elseif ($i > 6) { //second part
		for ($space = 0; $space <= $sa; $space++) {
			echo "&nbsp; ";
		}
		for ($star = $x; $star >= 1; $star--) {
			echo "*&nbsp;";
		}
		echo "<br>";
		$x -= 2; // decrement star for each line
		$sa++; //increment space for each line
	}
}
