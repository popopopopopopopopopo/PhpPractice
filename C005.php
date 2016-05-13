<?php
$input= trim(fgets(STDIN));
for ( $i = 0; $i < $input; $i++) {
        $ip[$i] = trim(fgets(STDIN));
        $ok = 0;
        $suti = explode(".",$ip[$i]);
        if(count($suti) == 4){
                for($j=0;$j<4;$j++){
                        if(is_numeric($suti[$j])){
                            if($suti[$j]>=0 && $suti[$j]<=255){
                                $ok = 1;
                            }
                        }
                }
        }
        if($ok == 1){
                echo "True\n";
        }else{
                echo "False\n";
        }
}
?>
