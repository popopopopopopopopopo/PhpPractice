<?php
    $input_lines = trim(fgets(STDIN));
    $val=explode(' ',$input_lines);
    $mm=$val[0];
    $tani=$val[1];

    if($tani==='km'){
        $ans=$mm*1000*100*10;
    }
    elseif($tani==='m'){
        $ans=$mm*100*10;
    }
    elseif($tani==='cm'){
        $ans=$mm*10;
    }
    else{
        $ans=$mm;
    }
    echo $ans;
?>
