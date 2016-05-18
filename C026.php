<?php

$nsp=explode(" ",trim(fgets(STDIN)));       //基準にんじんの情報
$n=$nsp[0];                                 //にんじんの個数
$S=$nsp[1];                                 //糖分の目安
$p=$nsp[2];                                 //許容誤差

$p_max=$S+$p;                               //当分の許容範囲max
$p_min=$S-$p;                               //当分の許容範囲min
$carrot_non=0;                              //にんじんの数
$carrot_weigh=0;                            //にんじんの質量

for ($i=0; $i < $n; $i++) {
    $ms=explode(" ",trim(fgets(STDIN)));    //にんじんデータ
    $m=$ms[0];                              //質量
    $s=$ms[1];                              //糖分

    if($p_min <= $s && $s <= $p_max){
        if($carrot_weigh < $m){
            $carrot_weigh=$m;
            $carrot_non = $i+1;
        }
    }
    }
    if($m === 0){
        echo "not found";
}
    else {
        echo $carrot_non;
    }
