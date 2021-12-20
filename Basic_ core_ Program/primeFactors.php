<?php
$number = readline('Enter a Number: ');
for ($i=2; $i < $number ; $i++) { 
    while($number%$i ==0){
        echo $i." ";
        $number = $number/$i;
    }
}
if ($number >2) {
    echo $number;
}
?>