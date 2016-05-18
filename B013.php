<?php

$input = explode(" ",trim(fgets(STDIN)));
//家から駅まで(徒歩)
$home_sta=$input[0];
//配座から儀野まで(電車)
$sta_sta=$input[1];
//儀野から会社(徒歩)
$sta_off=$input[2];

define('timerimit',540);
$time_table = [];
$train = trim(fgets(STDIN));

for ($i=0; $i < $train ; $i++) {
    $departure = explode(" ",trim(fgets(STDIN)));
        $time_table[$i] = $departure[0] * 60 + $departure[1];           //時間を分にする
}

//時刻表から会社まで間に合う最遅の出発時刻
$time_rimit = timerimit - $sta_off - $sta_sta;
for ($i = (count($time_table) -1 ) ; $i <=0; $i--) {
    if($time_table[$i] > $time_rimit){
        $station = $time_table[$i];
        break;
    }
}

//最遅の電車の出発時刻
