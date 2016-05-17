<?php
$times=trim(fgets(STDIN));              //回数
$val1=0;
$val2=0;
for($i=0;$i<$times;$i++){
    $oder=explode(' ',(fgets(STDIN)));
    $hen_oder=$oder[0];                         //命令

    if(preg_match('/SET/',$hen_oder)){
        if($hen_oder[1]===1){
            $val1=$oder[2];
        }
        else{
            $val2=$oder[2];
        }
}
    elseif(preg_match('/ADD/',$hen_oder)){
        $val2=add($val1,$hen_oder[1]);
    }
    else{
        $val2=sub($val1,$hen_oder[1]);
    }
}
echo $val1." ".$val2;


function add($val,$int){
    $val2=$val + $int;
    return $val2;
}
function sub($val,$int){
    $val2=$val-$int;
    return $val2;
}
