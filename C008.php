<?php

$tag=explode(" ",trim(fgets(STDIN)));      //タグの入力
$tagA=$tag[0];        //タグA
$tagB=$tag[1];        //タグB
$data=trim(fgets(STDIN));           //テキストデータS

while(strpos($data,$tagA) !== false && strpos($data,$tagB) !== false){
    $A=strpos($data,$tagA);
    $start=($A + strlen($tagA));

    $B=strpos($data,$tagB);
    $A_B=($B - $start);

    if($A_B){
        $dataA_B=substr($data,$start,$A_B);
        echo $dataA_B."\n";
    }
    else{
        echo "<blank>\n";
    }
    $data=substr($data,$B + strlen($tagB));
}
