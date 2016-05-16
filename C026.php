<?php

$nsp=explode(' ',trim(fgets(STDIN)));     //箱の数n,ボールの半径r
$n=$nsp[0];     //にんじんの個数
$S=$nsp[1];     //当分の目安
$p=$nsp[2];     //許容誤差
$p_max=$S+$p;
$p_min=$S-$p;
$carrot_non=0;
$carrot_weigh=0;
for ($i=0; $i < $n; $i++) {
    $carrot_non++;
    $ms=explode(' ',trim(fgets(STDIN)));        //高さ、幅、奥行き
    $m=$ms[0];      //質量
    $s=$ms[1];      //糖分

    if($p_min <= $s && $s <= $p_max){
        if($carrot_weigh < $s){
            $carrot_weigh=$m;
            $ans=$carrot_non;
        }
    }
    }
    if(empty($ans)){
        echo "not found";
}
    else {
        echo $ans;
    }
