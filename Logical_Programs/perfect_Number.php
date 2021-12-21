<?php
$n=6;
$sum=0;
for ($i=1; $i<$n; $i++)
{
	if(($n%$i)==0)
	{
		$sum=$sum+$i;
    }
}
if($sum==$n)
{
	echo "The Number ".$n." is a Perfect Number.";
}
else
{
	echo "The Number ".$n." is not a Perfect Number.";
}
?>