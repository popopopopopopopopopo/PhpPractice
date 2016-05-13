<?php
$input_lines = fgets(STDIN);
$val=explode(" ",$input_lines);
$m=$val[0];
$n=$val[1];

for($i=0;$i<10;$i++){
    if($i===0){
        echo $m + ($i*$n);
    }
    else{
        echo " ";
        echo $m + ($i*$n);
    }
}
?>
