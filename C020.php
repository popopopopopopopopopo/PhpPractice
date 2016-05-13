<?php

$m=trim(fgets(STDIN));
$p=trim(fgets(STDIN));
$q=trim(fgets(STDIN));

$mp=$m*(1-$p/100);  //売れ残りを加工したお惣菜
echo $ans=$mp*(1-$q/100);       //売れ残った量

 ?>
