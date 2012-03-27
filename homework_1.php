

<?php

 function is_prime($x)
 	 {
 	     if($x % 2 != 1) return false;
 	     $d = 3;
 	     $y = sqrt($x);
 	     while ($x % $d != 0 && $d < $y) $d += 2;
 	     return (($x % $d == 0 && $x != $d) * 1) == 0 ? true : false;
 	 }
	 
if(!is_numeric($_GET['number'])) {echo '<span style="color: red">The parameter is not a number.</span>';}
elseif ($_GET['number']<0 || $_GET['number']>19999) {echo '<span style="color: red">The parameter is not within the range [0,19999].</span>';}
elseif (is_prime($_GET['number'])) {echo "The number ".$_GET['number']." is prime!";}
else {echo '<span style="color: aqua">The number '.$_GET['number'].' is NOT prime!</span>';}
?>