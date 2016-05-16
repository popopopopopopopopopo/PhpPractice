<?php

$mpq=explode(" ",trim(fgets(STDIN)));
$m=$mpq[0];     //仕入れ
$p=$mpq[1];     //パーセント
$q=$mpq[2];     //パーセント(売れ残り)

$mp=$m* (1-$p/100);  //売れ残りを加工したお惣菜
$ans=$mp*(1-$q/100);       //売れ残った量
echo $ans;

 ?>
