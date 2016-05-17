<?php

$n=trim(fgets(STDIN));      //レシピの食材数
for ($i=0; $i < $n ; $i++) {
    $recipi[]=explode(" ",trim(fgets(STDIN)));
}
$m=trim(fgets(STDIN));      //持ってる食材数
for ($i=0; $i < $m ; $i++) {
    $have[]=explode(" ",(fgets(STDIN)));
}
foreach($recipi as $recipis){
    $recipi_shoku=$recipis[0];
    $recipi_kazu=$recipis[1];

    foreach($have as $has){
        $have_shoku=$has[0];
        $have_kazu=$has[1];

        if ($recipi_shoku==$have_shoku) {
            $canmake=$have_kazu/$recipi_kazu;
            if ($canmake>0) {
                $canmakes[]=$canmake;
            }
            continue;
        }
    }
}
if(count($canmakes)==$n){
    echo floor(min($canmakes));
}
else{
    echo "0";
}
