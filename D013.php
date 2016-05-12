<?php
    $input_lines1 = fgets(STDIN);
    $input_lines2 = fgets(STDIN);

    echo floor($input_lines1/$input_lines2) . "\n";
    echo $input_lines1%$input_lines2 . "\n";
?>
