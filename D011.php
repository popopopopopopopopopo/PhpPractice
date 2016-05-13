<?php
//$a=trim(fgets(STDIN));

$a='B';
if ($a>='A'&& $a<='Z') {
    $non = $a-'A';
}

$non = array_search($a,  true);
if ($non !== false){
    echo  $a, $non;
}

?>
