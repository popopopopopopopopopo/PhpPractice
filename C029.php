<?php
$mn=explode(" ",trim(fgets(STDIN)));     //連休と旅行の日数
$m=$mn[0];      //連休の日数
$n=$mn[1];      //旅行の日数
$day_array=array();

for ($i=0;$i<$m;$i++) {
    $dr=explode(" ",trim(fgets(STDIN)));
    $day=$dr[0];        //日付
    $rain=$dr[1];       //降水確率
    $day_array[$day."日"]=$rain;
}
    $roop=$m-$n+1;
    for ($i=0; $i < $roop ; $i++) {
        $rainsum=array_slice($day_array,$i,$n);
        $rain_avg[] = intval(array_sum($rainsum)/$n);
    }

    $min=min($rain_avg);
    for ($i=0; $i < $roop ; $i++) {
        $rainsum=array_slice($day_array,$i,$n);
        $rain_avg2=intval(array_sum($rainsum)/$n);
        if($rain_avg2==$min){
            $good_day=$rainsum;
        }
    }
    foreach($good_day as $key => $value){
        $result[] = str_replace("日","",$key);
    }
$first=$result[0];
$last=$result[$n-1];
echo $first." ".$last;
