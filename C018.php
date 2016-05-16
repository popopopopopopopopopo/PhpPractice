<?php

$n=trim(fgets(STDIN));      //レシピの食材数
for ($i=0; $i < $n ; $i++) {
    $recipi=explode(" ",trim(fgets(STDIN)));
    $recipi_shoku=$recipi[0];
    $recipi_kazu=$recipi[1];
}
$m=trim(fgets(STDIN));      //持ってる食材数
for ($i=0; $i < $m ; $i++) {
    $have=explode(" ",trim(fgets(STDIN)));
    $have_shoku=$have[0];
    $have_kazu=$have[1];
}
if ($recipi_shoku==$have_shoku) {
    $canmake=$have_kazu/$recipi_kazu;
    if ($canmake>0) {
        $canmakes[]=$canmake;
    }
}
if(count($canmakes)==$n){
    echo floor(min($canmakes));
}
else{
    echo "0";
}
