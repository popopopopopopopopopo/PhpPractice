<?php

$nr=explode(" ",trim(fgets(STDIN)));     //箱の数n,ボールの半径r
$n=$nr[0];
$r=$nr[1];

$R=$r*2;
for ($i=1; $i <=$n; $i++) {
    $hwd=explode(' ',trim(fgets(STDIN)));        //高さ、幅、奥行き
    $h=$hwd[0];
    $w=$hwd[1];
    $d=$hwd[2];

    if ($h>=$R &&$w>=$R &&$d>=$R) {
        echo $i."\n";
    }
}
