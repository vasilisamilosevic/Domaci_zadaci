<?php

function print_array($niz, $i){
    if (!is_array($niz))
        return 0;
    else {
        echo $niz[$i];
        echo "<br/>";
        return print_array($niz, $i+1);
    }
}
    
        

echo print_array(['vanja', 'tanja', 'ana'], 0);