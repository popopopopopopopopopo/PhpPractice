<?php
$n = (int)trim(fgets(STDIN));
$gyo = array();
for($i=0;$i<$n;$i++) {
	$gyo[$i] = trim(fgets(STDIN));
}
$moji = '';
foreach($gyo as $key=>$val) {
	if($key===0) {
		$moji .= $val;
	} else {
		$moji .= ','.$val;
	}
}
echo 'Hello '.$moji.'.'.PHP_EOL;
