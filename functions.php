<?php

///unlimited perameter and arguments accept functions with type declaraiton

function sum (int ...$numbers):int {
    $results=0;
    for($i=0; $i<count($numbers); $i++){
        $results+=$numbers[$i];
    }
    return $results;
}

echo sum(0);