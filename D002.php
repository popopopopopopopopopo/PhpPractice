<?php
    $a = fgets(STDIN);
   $b = fgets(STDIN);
    if ($a > $b){
        echo $a . "\n";}
    elseif ($a < $b){
        echo $b . "\n";}
    else{
        echo "eq\n";
    }
?>
