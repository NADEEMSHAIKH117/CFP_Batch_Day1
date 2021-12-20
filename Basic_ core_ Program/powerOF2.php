<?php
    // Just printing value of 2^5
    $num =5;
    echo "power of 2^".$num. " is: ".pow(2, $num)."\n";

    echo "printing all till power value ".$num."\n";

    // By using loop printing value of power of 2
    for ($i=1 ; $i<=$num ; $i++) { 
        echo ("power of 2^".$i. " is: " .pow(2, $i))."\n";
    }

?>