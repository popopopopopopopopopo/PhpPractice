<?php

$q=trim(fgets(STDIN));      //判定したい整数の個数Q
for ($i=0; $i <$q ; $i++) {
    $n=trim(fgets(STDIN));
    $yaku=array();

    for ($j=1; $j < $n ; $j++) {
        if($n%$j ==0){
            $yaku[]=$j;
        }
    }
    $total=array_sum($yaku);
    $sa=($total-$n);
    switch($sa){
        case 0:
            echo"perfect";
            break;
        case -1:
        case 1:
            echo "nearly";
            break;
        default:
            echo "neither";
    }
    echo "\n";
}
 ?>
