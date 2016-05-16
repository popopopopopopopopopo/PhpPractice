<?php

    $n=trim(fgets(STDIN));      //隠れシートの数

    for($i=0;$i<$n;$i++){
        $dp[$i]=trim(fgets(STDIN),"\r");     //日付と金額
        echo $dp[$i];
    $var=explode(" ",$dp[$i]);
    $d=$var[0];
    $p=$var[1];
}
    if($d=3){
        echo $ans=floor($p*0.03);
    }
    elseif($d=5){
        echo $ans=floor($p*0.05);
    }
    else{
        echo $ans=floor($p*0.01);
    }
