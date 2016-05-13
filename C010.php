<?php
    $ab=explode(" ",fgets(STDIN));
    $kokage = fgets(STDIN);
    for($i=0;$i<$kokage;$i++){
        $tree[$i]=fgets(STDIN);
    }
    for($i=0;$i<$kokage;$i++){
        $xy=explode(" ",$tree[$i]);
        $formula=($xy[0]-$ab[0])*($xy[0]-$ab[0])+($xy[1]-$ab[1])*($xy[1]-$ab[1]);
        if($formula>=$ab[2]*$ab[2]){
            echo "silent\n";
        }else {
            echo "noisy\n";
        }
    }
