<?php
$nmk = explode(" ",(fgets(STDIN)));
$N_kosu = $nmk[0];                 //パラメータの個数
$M_nin = $nmk[1];                          //ユーザーの人数
$K_top = $nmk[2];                           //トップ
$C = explode(" ",(fgets(STDIN)));

for ($i = 0; $i < $M_nin; $i++) {
	$Score = 0;
	$X = explode(" ",(fgets(STDIN)));

	for ($j = 0; $j < $N_kosu; $j++) {
		$Score += $C[$j] * $X[$j];
	}
	$Scores[] = round($Score);
}
rsort($Scores);
for ($i = 0; $i < $K_top; $i++) {
	echo $Scores[$i] . "\n";
}
