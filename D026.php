<?php
for($i=0;$i<7;$i++){
    $day=fgets(STDIN);
    echo $day . '<br>';
    if($day='no')
       $count++;
}
echo $count;

?>
