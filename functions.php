<?php

function isEven($n){
    if($n%2==0){
        return true;   
    }   
    return false;
}

function factorials($n){
    $result=1;
    for($x=$n; $x>1; $x--){
        $result *= $x;
    }
     return $result;
} 