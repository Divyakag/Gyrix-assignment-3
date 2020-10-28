<?php
function printNumeric($a, $b)//function for numeric value
{
    $c = $a + $b;
    echo "value is $c<br>";
}
function printString($fname,$lname)//function for string type vale 
{
    echo "value is $fname $lname<br>";
}
printNumeric(2, 3);// function call
printString("Divya","kag");//function call
?>