<?php
$year = readline('Enter a year: ');
if((0==$year%4) & (0 != $year % 100) | (0 == $year % 400))
{
    echo "$year is Leap Year.";
}else{
    echo "$year is not a Leap Year."; 
}

?>