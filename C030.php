<?php

$hw=explode(" ",trim(fgets(STDIN)));
$h=$hw[0];     //たて
$w=$hw[1];     //よこ

for ($i=0; $i <$h ; $i++) {
    for ($j=0; $j < $w ; $j++) {
        $p=explode(" ",trim(fgets(STDIN)));
        if($p[$j]>128){
            echo 0;
        }
        else{
            echo 1;
        }
        }
        if($p[$i]>128){
            echo 0 ;
        }
        else {
            echo 1;
        }
        echo "\n";
}
