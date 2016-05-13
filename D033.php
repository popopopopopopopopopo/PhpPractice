<?php
$name=trim(fgets(STDIN));
$val=explode(' ',$name);
$sei=$val[0];
$mei=$val[1];

echo substr($sei,0,1). '.'.substr($mei,0,1);
 ?>
