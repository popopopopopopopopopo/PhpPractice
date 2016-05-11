<?php
    $input_lines = fgets(STDIN);
    for ($i=1;$i<10;$i++){
    $a = $input_lines * $i;
    echo $a . ' ';
    }
    echo "\n";
?>
