<?php
$datas_high=1;
$datas_low=1000000;

$days = trim(fgets(STDIN));							//日数
for ($i = 0; $i < $days; $i++) {
	$datas= explode(" ",trim((fgets(STDIN))));		//株価のデータ

	if($i === 0){									//始値
		$datas_first=$datas[0];
	}
	if($i === $days-1){								//終値
		$datas_last=$datas[1];
	}
	if($datas_high < $datas[2]){					//高値
		$datas_high=$datas[2];
	}
	if($datas_low > $datas[3]){						//低値
		$datas_low=$datas[3];
	}
}
echo $datas_first. " ".$datas_last." ".$datas_high." ".$datas_low;
