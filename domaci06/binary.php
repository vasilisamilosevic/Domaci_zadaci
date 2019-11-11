<?php

function binar($decimal_number) 
{ 
    if ($decimal_number == 0)  
        return 0;  
    else
        return ($decimal_number % 2 + 10 *  
                binar($decimal_number / 2)); 
}

echo binar(7);