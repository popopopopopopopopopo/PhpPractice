<?php
$input_lines = trim(fgets(STDIN));
for($i = 1 ;$i<=9;$i++) {
	if($i===1) {
		echo $input_lines*$i;
	}
	else {
		echo ' '.$input_lines*$i;
		}
	}
?>
