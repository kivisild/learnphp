<?php

class Box{
    public $width;
    public $height;
    public $length;

    public function __contruct($w = 0, $h = 0, $l = 0){
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
    }

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

$box1 = new Box();
$box1->width = 10;
$box1->height = 10;
$box1->length = 10;

var_dump($box1->volume());

$box3 = new Box();
$box->width = 10;
// Kui lihtsalt võrduma panna, siis on by-reference, aga nii on täiesti oma objekt.
$box2 = clone $box1;
$box2->width = 20;
