<?php
$input_lines = trim(fgets(STDIN));
$val=explode(" ",$input_lines);
$m=$val[0];
$n=$val[1];
for($i=0;$i<10;$i++){
echo  $m+($i*$n)." ";
}
?>
