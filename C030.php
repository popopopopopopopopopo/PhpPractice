<?php

$hw=explode(" ",trim(fgets(STDIN)));
$h=$hw[0];                                          //たて
$w=$hw[1];                                          //よこ

for ($i=0; $i <$h ; $i++) {                         //たてのfor文
    $p=explode(" ",trim(fgets(STDIN)));
    for ($j=0; $j < $w ; $j++) {                    //よこのfor文

        if($p[$j]<128){                             //128未満なら0を表示
            echo 0;
        }
        else{
            echo 1;                                 //128以上なら1を表示
        }
        if($j ==$w-1){
            echo "\n";
        }
        else {
            echo " ";
        }
    }
}
