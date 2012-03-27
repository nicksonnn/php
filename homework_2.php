<?php
$arr=range(20,1000, 37);

 function is_prime($x)
 	 {
 	     if($x % 2 != 1) return false;
 	     $d = 3;
 	     $y = sqrt($x);
 	     while ($x % $d != 0 && $d < $y) $d += 2;
 	     return (($x % $d == 0 && $x != $d) * 1) == 0 ? true : false;
 	 }

function find_3_prime($a)
{
	foreach($a as $value)
	{
		if(is_prime($value)) {$primes[]=$value; }
	}	
	echo $primes[2]."<br/>";
}
find_3_prime($arr);

function check_excists($a)
{
	if(in_array(146, $a)) {$f="The number 146 exists in the array";}
	else {$f="The number 146 does not exist in the array";}
	if(in_array(284, $a)) {$s="The number 284 exists in the array";}
	else {$s="The number 284 does not exist in the array";}
	if(in_array(871, $a)) {$t="The number 871 exists in the array";}
	else {$t="The number 871 does not exist in the array";}
	echo $f."<br/>".$s."<br/>".$t."<br/>";
}
check_excists($arr);

?>