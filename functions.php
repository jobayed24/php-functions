<?php



function factorials($n){
    $result=1;
    for($x=$n; $x>1; $x--){
        $result *= $x;
    }
     return $result;
} 