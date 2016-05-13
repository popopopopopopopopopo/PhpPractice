<?php
//親カード
$input= trim(fgets(STDIN));
$val=explode(" ",$input);
$a=$val[0];
$b=$val[1];
//整数n
$n= trim(fgets(STDIN));

//n行の入力、各行（1<=i<=n）、1つ目A_i、2つ目B_i
for ($i=1; $i <=$n ; $i++) {
    $input_child= trim(fgets(STDIN));
    $val_child=explode(" ",$input_child);
    $a_child=$val_child[0];
    $b_child=$val_child[1];

if($a>$a_child){        //A＞a
    echo "High\n";
}

elseif($a<$a_child){                   //A<a
    echo "Low\n";
}
else{
    if($b<$b_child){
        echo "High\n";
    }
    else{
        echo "Low\n";
    }
}}
?>
