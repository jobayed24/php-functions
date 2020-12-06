<?php



function factorials( $n){
    if(gettype($n)!="integer"){
        return "invalid";
    }
    $result=1;
    for($x=$n; $x>1; $x--){
        $result *= $x;
    }
    return $result;
} 