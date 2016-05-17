<?php
$cons=explode(" ",trim(fgets(STDIN)));        //工事現場の(a,b)座標、騒音の大きさR
//[0]:x座標,[1]:y座標,[2]:騒音の大きさ
$shade = trim(fgets(STDIN));                //木陰の数
for ($i = 0; $i < $shade; $i++) {
	$tree[] =explode(" ",trim(fgets(STDIN)));         //木陰の座標
}
foreach ($tree as $trees) {
	if (Heaven($trees, $cons) >= pow($cons[2], 2)) {       //(x-a)^2+(y-b)^2>=R^2
		echo "silent";
	} else {
		echo "noisy";
	}
	echo "\n";
}

function Heaven($trees, $cons) {
	$a = pow(($trees[0] - $cons[0]), 2);          //(x-a)のべき乗
	$b = pow(($trees[1] - $cons[1]), 2);         //(y-b)のべき乗
	$formula = $a + $b;
	return $formula;
}
