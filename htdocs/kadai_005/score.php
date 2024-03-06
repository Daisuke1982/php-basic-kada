<?php 
    $average = 0;
    $i = 0;
    $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
    foreach ($scores as $score){
        $average = $average + $score;
        $i++;
    }
    echo $average / $i ;
?>