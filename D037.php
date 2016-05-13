<?php
    $m= fgets(STDIN);
    $n= fgets(STDIN);

    $w = $n/$m;
    $a = $n%$m;
        if ($a===0){
    echo $w;
        }
        else{
    echo round($w)+1;
        }

?>
