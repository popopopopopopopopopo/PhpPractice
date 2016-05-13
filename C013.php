<?php

    $n=trim(fgets(STDIN));
    $m=trim(fgets(STDIN));
    $room=array();
    $ok=0;
    for($i=0;$i<$m;$i++){
        $room[$i]=trim(fgets(STDIN));
        $shou=$room[$i];
        $kirai=0;
        while($shou>=10){
                $amari=$shou%10;
                $shou=floor($shou/10);
                if($amari==$n){
                    $kirai=1;break;
                }
        }
        if($shou==$n)$kirai=1;
        if($kirai==0){
            echo $room[$i]."\n";$ok++;
        }
    }
    if($ok==0)echo "none\n";
?>
