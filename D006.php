<?php
    $input_lines = trim(fgets(STDIN));
    $input_liness = trim(fgets(STDIN));
    if($input_liness='km'){
        $ans=$input_lines * 1000*100*10;
    }
    elseif($input_liness='m'){
        $ans=$input_lines*100*10;
    }
    elseif($input_liness='cm'){
        $ans=$input_lines*10;
    }
else;
    echo $ans;
?>
