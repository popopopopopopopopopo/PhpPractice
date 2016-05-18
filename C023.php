<?php

$win_no = explode(" ",trim(fgets(STDIN)));          //当選番号
$tickets = trim(fgets(STDIN));					//購入したくじの枚数

for ($i = 0; $i < $tickets; $i++) {
    $count[$i] = 0;
	$buy_no = explode(" ",trim(fgets(STDIN)));		//購入したくじの番号

	for ($j=0; $j < 6; $j++) {
		for ($k=0; $k < 6; $k++) {
			if($win_no[$k] === $buy_no[$j]){
				$count[$i] ++;
			}
		}
	}
	echo $count[$i] . "\n";
}
