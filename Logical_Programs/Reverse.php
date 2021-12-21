<?php
$n = 283;
$temp = $n;
$rev = 0;
while($n>0)
{
	$r = $n%10;
	$rev = ($rev*10)+$r;
	$n = floor($n/10);
}
echo "The Reverse of the Number ".$temp." is: ".$rev;
?>