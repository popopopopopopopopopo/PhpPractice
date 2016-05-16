<?php
$nmk=explode(" ",trim(fgets(STDIN)));
$N_kosu=$nmk[0];
$M_nin=$nmk[1];
$K_top=$nmk[2];
$C=explode(" ",trim(fgets(STDIN)));
$C1=$C[0];
$C2=$C[1];
$C3=$C[2];
$C4=$C[3];
for ($i=0;$i<$M_nin;$i++) {
    $X=explode(" ",trim(fgets(STDIN)));
    $X1=$X[0];
    $X2=$X[1];
    $X3=$X[2];
    $X4=$X[3];
$S=round($C1*$X1+$C2*$X2+$C3*$X3+$C4*$X4);
}
rsort($S);
for ($i=0; $i < $K_top; $i++) {
    echo $S[$i]."\n";
}
