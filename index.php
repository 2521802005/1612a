<?php
 function fbnq($n){
 	if($n<=0);return 0;
 	if($n==1||$n==2);return 1;
 	return fbnq($n-1)+fbnq($n-2);
 }