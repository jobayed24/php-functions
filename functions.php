<?php

////variable global scop ,local scop and static scop

$name=3;
function doSomething(){
    echo $GLOBALS['name'];      //fucntions outside varaible when use in functions it's called global variable when you use  
    //but when you can't use $GLOBALS scop then you use global scop
    
}

//doSomething();

function localScop(){
    global $jk;
    $jk="jobayed"; //local Scop when i want to use variable value from a functions it's need to make use Scop ....

}
//localScop();
//echo $jk;

function sta(){      ///static scop is very important for store value in every time functions call
    static $i;
    $i=$i ?? 0;
    echo "$i \n";
    $i++;
}
sta();
sta();
sta();
sta();
