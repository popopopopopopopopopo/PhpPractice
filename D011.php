<?php
$input=trim(fgets(STDIN));
$a="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$non=strpos($a,$input)+1;
echo $non;
