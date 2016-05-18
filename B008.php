<?php
$menber_time=explode(" ",trim(fgets(STDIN)));           //会員数、ライブ回数
$menber=$menber_time[0];                                //会員数
$time=$menber_time[1];                                  //ライブ回数
$info=0;
for ($i=0; $i < $time ; $i++) {                         //ライブ回数分(たて)
    $total=0;
    $ear_info=explode(" ",trim(fgets(STDIN)));          //ライブごとの利益情報
    for ($j=0; $j < $menber ; $j++) {                   //会員数分(よこ)
        $total += $ear_info[$j];
    }
if($total > 0){
    $info += $total;
}
}
echo $info;

?>
