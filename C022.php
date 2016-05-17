<?php
$days = trim(fgets(STDIN));
for ($i = 0; $i < $days; $i++) {
	$datas[] = explode(" ",(fgets(STDIN)));

}
echo reset($datas[0]). " ";                //始値
echo end($datas[$days-1])." ";          //終値

foreach ($datas as $data) {
	$days_max = max($datas);              //高値
	$days_min= min($datas);              //低値
}
echo max($days_max) . " ";
echo min($days_min);
