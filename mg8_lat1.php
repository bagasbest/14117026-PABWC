<?php
 

 function ganti(&$i, &$j){
 	

 	$tmp = $i;
 	$i = $j;
 	$j = $tmp;
}
	$i=1;
 	$j=2;
 	
 	ganti($i,$j);

	echo "$i  $j";
 
?>