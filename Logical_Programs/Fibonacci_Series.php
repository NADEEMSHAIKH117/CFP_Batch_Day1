<?php
$n = 10;
$n1 = 0;
$n2 = 1;
if($n==0)
{
    echo $n1;
}
elseif($n==1)
{
    echo $n1." ".$n2;
}
elseif($n>=3)
{
    echo $n1." ".$n2." ";
    for($i=3; $i<=$n; $i++)
    {
        $count = $n1 + $n2;
        $n1 = $n2;
        $n2 = $count;
        echo $count." ";
    }
}
else
{
    echo "Wrong Input";
}
?>