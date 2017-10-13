<?php

// PHP has a feature that allows you to call functions by using a varible name
// To do so, assign the name of the function as a string value to variable

function getAuthor() {
    echo 'Charles Dickens';
}

$varFuncName = 'getAuthor';

$varFuncName();

?>