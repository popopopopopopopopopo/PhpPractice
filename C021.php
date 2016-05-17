<?php

$iki=explode(' ',trim(fgets(STDIN)));     //暴風域
$radius_x=$iki[2];      //内側の半径
$radius_y=$iki[3];      //外側の半径
$n=trim(fgets(STDIN));      //人数
for ($i=0; $i < $n ; $i++) {
    $zahyo=explode(" ",trim(fgets(STDIN)));
    $range=definition($iki,$zahyo);

	if ($range >= pow($radius_x, 2) && $range <= pow($radius_y, 2)) {
        echo "yes";
    }
    else{
        echo "no";
    }
    echo "\n";
}
function definition($iki,$zahyo){       //計算式$rangeの定義
    $center_x=$iki[0];      //中心の座標x
    $center_y=$iki[1];      //中心の座標y
    $zahyo_x=$zahyo[0];         //人の座標ｘss
    $zahyo_y=$zahyo[1];         //人の座標ｙ

    $range=pow(($zahyo_x -$center_x),2)+pow(($zahyo_y-$center_y),2);
    return $range;
}
