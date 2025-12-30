<?php

function hello(){
    var_dump('Hello');
}

function functionWidthArguments($argument){
    var_dump('Function with arguments' . $argument);
}

// Võtab lõputult argumente
function stuff(...$args){
    var_dump(...$args);
}

function recursive($i){
    if ($i < 10){
        var_dump($i);
        recursive($i+1);
    }
}
hello();
functionWidthArguments('hello world!');