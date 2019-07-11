<?php
	$arr = [1,2,3,4,5,6];
	function number($arr){
		//偶数
		$ou = [];
		$ji = [];
		for($i=0;$i<count($arr);$i++){
			if($arr[$i]%2==1){
				$ji[] = $arr[$i];
			}else{
				$ou[] = $arr[$i];
			}
		}
		return array_merge($ji,$ou);
	}
	print_r(number($arr));