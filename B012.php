<?php
$input = explode(" ",trim(fgets(STDIN)));
//立候補者
$candi = $input[0];
//有権者
$voter = $input[1];
//公園回数
$perform = $input[2];
for ($i=0; $i < $perform; $i++) {
    $speech = trim(fgets(STDIN));
    }
