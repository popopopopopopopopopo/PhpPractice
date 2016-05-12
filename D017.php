<?php
for($i=0;$i<5;$i++){
        $input_lines = array(fgets(STDIN));
        echo "\n";
}
$max = max($input_lines);
$min = min($input_lines);
echo $max . "\n" . $min;
 ?>
