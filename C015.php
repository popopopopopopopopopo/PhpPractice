<?php
$receipt=trim(fgets(STDIN));      //隠れシートの数
$ans=0;
for($i=0;$i<$receipt;$i++){
    $dp=explode(" ",fgets(STDIN));     //日付と金額
    $day=$dp[0];
    $price=$dp[1];

    if(strstr($day,'3')){
         $ans+=floor($price*0.03);
    }
    elseif(strstr($day,'5')){
         $ans+=floor($price*0.05);
    }
    else{
         $ans+=floor($price*0.01);
    }
}
echo $ans;
