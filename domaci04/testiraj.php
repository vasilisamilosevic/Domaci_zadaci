<?php


$i= $_GET['year'];

if (($i%4==0 && $i%100!=0) || ($i%400==0))
{
    echo "Jeste prestupna godina."; 
    
}
else 
    echo "Nije prestupna godina. ";



?>