<?php

    function checkType( $a , $b ){
        if( (is_string($a)) && (is_string($b))){
            $c=$a.$b;
            echo "value is $c<br>";
        }
        else if( (is_int($a)) && (is_int($b))){
            $c=$a+$b;
            echo "value is $c<br>";
        }
        else if( (is_float($a)) && (is_float($b))){
            $c=$a+$b;
            echo "value is $c<br>";
        }
        else if( (is_bool($a)) && (is_bool($b))){
            echo "parameter are boolean <br>";
        }
        else if( (is_null($a)) && (is_null($b))){
            echo "parameter are null <br>";
        }
        else
            echo "Not valid";
       }
    checkType( "Divya" , "Kag" );
    checkType( 2, 5 );
    checkType( 7.2, 7.4 );
    checkType( true , false );
    checkType( null , null );
    
?>