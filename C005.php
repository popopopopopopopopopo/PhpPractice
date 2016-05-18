<?php
$ad_no = trim(fgets(STDIN));
for($i=0;$i<$ad_no;$i++){
    $count=0;
    $address =explode(".",trim(fgets(STDIN)));
    if(count($address) == 4){
        for($j=0;$j<4;$j++){
            if(is_numeric($address[$j])){
                if($address[$j]>=0 && $address[$j]<=255){
                    $count=1;
                }
            }
        }
    }
    if($count ==1){
        echo "True\n";
    }
    else{
        echo "False\n";
    }
}
?>
