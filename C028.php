<?php
$count=0;
$n=trim(fgets(STDIN));     //問題数
for ($i=0;$i<$n;$i++) {
    $ans=explode(" ",trim(fgets(STDIN)));
    $ans_q=$ans[0];
    $ans_a=$ans[1];

    if($ans_q===$ans_a){
        $count=$count+2;
    }
    elseif($ans_q==$ans_a){
        if(preg_match($ans_q,$ans_a)){
        $count=$count+1;
        }
    }
}
    echo $count;
