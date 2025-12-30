<?php

class Cat {
    public function __construct(){
        var_dump('Class was created');
    }

    public function __toString(){
        return 'Mjäu';
    }

    public function __destruct(){
        var_dump('Class was destoryed');
    }

    public function __get($name){
        var_dump($name);
        return "something to return when something is used that is not a property";

    }

    public function __call($name, $args){
        var_dump($name, $args);
        return "this function does not exist";
    }

    public function __invoke($value){
        var_dump($value);
        return 'Tried to use class as a function';
    }
}

$kitty = new Cat();
var_dump($kitty);
echo $kitty;

$kitty = 1;
