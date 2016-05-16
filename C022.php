<?php

    $n=trim(fgets(STDIN));      //日数
    for($i=0;$i<$n;$i++){
        $sehl=explode(' ',trim(fgets(STDIN)));
    }
echo $sehl[0]." ".max($sehl)." ".min($sehl)." ".$sehl[$n];
