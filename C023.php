<?php
$win_no = explode(" ",(fgets(STDIN)));          //当選番号
$sheets = trim(fgets(STDIN));
$match_count = 0;

for ($i = 0; $i < $sheets; $i++) {
	$buy_no = explode(" ",(fgets(STDIN)));

	foreach ($win_no as $win_num) {
		foreach ($buy_no as $buy_num) {
			if ($win_num === $buy_num) {
				$match_count++;
				break;
			}
		}
	}
	echo $match_count . "\n";
}
