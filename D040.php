<?php
$count=0;
$myarray = array();
for ($i=0; $i < 7; $i++) {
    $weather = trim(fgets(STDIN));
    $myarry[$i] = $weather;
    if ($weather>30){
        $count++;
    }
    else{}
}
echo $count;
?>
