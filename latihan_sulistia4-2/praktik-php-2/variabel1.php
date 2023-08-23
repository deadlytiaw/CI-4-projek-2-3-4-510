<?php
$x=50; //global scope

function myTest()
{
    global $x;
    echo $x; //local scope
}
myTest();
?>