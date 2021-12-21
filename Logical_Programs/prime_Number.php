<?php
$n = 11;
$flag=0;
if(($n<=0) || ($n==1))
{
	echo $n." is not a Prime Number.";
}
else if($n==2)
{
	echo $n." is a Even Prime Number.";
}
else
{
	for($i=1; $i<=$n; $i++)
	{
		if(($n%$i)==0)
		{
			$flag=$flag+1;
		}
		else
		{
			$flag=$flag;
		}
	}
	if($flag==2)
	{
		echo $n." is a Prime Number.";
	}
	else
	{
		echo $n." is not a Prime Number.";
	}
}
?>