<?php

    $n=trim(fgets(STDIN));      //回数
    $val1=0;
    $val2=0;
    for($i=0;$i<$n;$i++){
        $oder=explode(' ',(fgets(STDIN)));
        $hen=$oder[0];

if(preg_match("/SET/",$hen)){
    if($oder[1]==1){
        $val1=$oder[2];
    }
    else{
        $val2=$oder[2];
    }
}
elseif(preg_match("/ADD/",$hen)){
    $val2=add ($val1,$hen[1]);
}
else{
    $val2=sub ($val1,$hen[1]);
}
}
echo $val1." ".$val2;

function add ($val,$int){
    $val2=$val + $int;
    return $val2;
}
function sub ($val,$int){
    $val2=$val - $int;
    return $val2;
}
