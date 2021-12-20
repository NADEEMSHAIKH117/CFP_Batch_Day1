<?php
$headCount=0;
$tailCount=0;
for ($i=0; $i <10 ; $i++) { 
    
    $count = rand(0,1);
    if ($count== 0) {
        echo "Head"."\n";
        $headCount++;
    }
    else {
        echo "Tails"."\n";
        $tailCount++;
    }
}

echo "times head:".$headCount."\n";
echo "times head:".$tailCount."\n";

$heads = $headCount/10*100;
$tails = $tailCount/10*100;

echo "Percentage of Heads: ".$heads."%"."\n";
echo "Percentage of Tails: ".$tails."%";


?>