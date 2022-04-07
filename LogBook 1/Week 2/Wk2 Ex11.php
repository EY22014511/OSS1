<?php
 $mymarks["year 1"] = 55;
 $mymarks["year 2"] = 65;
 $mymarks["year 3"] = 75;
 $mymarks["year 4"] = 50;
 $mymarks["year 5"] = 70;
 $mymarks["year 6"] = 40;

 $total = 0; 
 // foreach loop here…
 foreach($mymarks as $index => $value)
 {
    $total = $total + $mymarks[$index];
    $average = $total / 6;
 }
 echo "Total: $total <br/> Average: $average";
?>