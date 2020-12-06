<?php

///recursive functions full proccess called recusion ....

function printN($i){
    if($i>10){
        return;
    }
    
    
    echo "$i \n";
    $i++;
    printN($i);
}

function startToEnd($sart,$end,$steping=2){
    if($sart>$end){
        return;
    }
    echo "$sart \n";
    $sart+=$steping;
    startToEnd($sart,$end,$steping);
}

startToEnd(3,55,6);
