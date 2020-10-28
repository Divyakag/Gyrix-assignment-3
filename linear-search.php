<?php

$numbers = array(4, 6, 2, 22, 11,8,10);
$search = 18;
function linearSearch( $numbers , $search )// creating a function 
    {
        $arrayLength = count( $numbers );
        for( $i = 0 ; $i < $arrayLength ; $i++ )
        {
            if( $numbers[$i] == $search )//if searching number and array index element are equal the return i
            return $i;
        }
        return -1;
    }
        $result = linearSearch( $numbers , $search );//Function call
        if( $result == -1 )
        {
            echo "value is not found: $search";
        }
        else
        {
            echo "value is find :$search";
        }
?>

