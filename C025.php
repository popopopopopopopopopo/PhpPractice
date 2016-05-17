<?php

$MAXmai=trim(fgets(STDIN));         //1度に運べる最大枚数M
$COUNT=trim(fgets(STDIN));          //今日一日でファックスが届く回数
$hour0=0;           //ひとつ前の時間
$count=0;
$total_count=[];    //合計枚数
$cont=0;            //運ぶ合計回数

for ($i=0; $i <$COUNT ; $i++) {     //ファックスが届く時間
    $time=explode(" ",trim(fgets(STDIN)));
    $hour=$time[0];
    $sheets=$time[2];
if($hour0 < $hour){
    $hour0 =$hour;
    $count++;
}
if($hour0 == $hour){
    $total_count[$count] += $sheets;
}
}

foreach((array)$total_count as $data){
    $cont += ceil($data / $MAXmai);
}
echo $cont;
