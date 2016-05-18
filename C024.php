<?php
$times=trim(fgets(STDIN));              //回数
$val1=0;
$val2=0;
for($i=0;$i<$times;$i++){
    $oder=explode(" ",trim(fgets(STDIN)));
}
    if($oder[0] === "SET"){
        if($oder[1] === 1){
            $val1=$oder[2];
        }
        else{
            $val2=$oder[2];
        }
    }
    elseif($oder[0] === "ADD"){
        $val2=$val1 + $oder[1];
    }
    elseif($oder[0] === "SUB"){
        $val2=$val1 - $oder[1];
    }

echo $val1." ".$val2;
?>
