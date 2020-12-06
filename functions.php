<?php

///factorails find out by recursive functions remember that recursive fucntions mean it's called by himself

function fc($i){
    if($i<1){
        return 1;
    }
  return $i * fc($i-1);
    
}
echo fc(5);