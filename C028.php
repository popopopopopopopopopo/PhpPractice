<?php
$cont=0;
$n=trim(fgets(STDIN));                                  //問題数
for ($i=0;$i<$n;$i++) {
    $count=0;
    $ans=explode(" ",trim(fgets(STDIN)));
    $ans_q=strlen($ans[0]);                             //正解
    $ans_a=strlen($ans[1]);                             //生徒の解答

    if($ans_q !== $ans_a){
        $count=2;
    }
    $char_q=str_split($ans[0]);                         //文字を配列に変換
    $char_a=str_split($ans[1]);
    for ($j=0; $j < $ans_q; $j++) {
        if($count < 2){
            if(strcmp($char_q[$j],$char_a[$j])){        //文字列を比較
                $count++;
            }
        }
    }
    $cont=$cont+(2-$count);
}
    echo $cont;
