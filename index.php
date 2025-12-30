<?php

class Cat {
    use Colorful;
}
class Box{
    use Colorful;
    private $width;
    public $height;
    public $length;

    public static $count = 0;

    public function __construct($w = 0, $h = 0, $l = 0){
        $this->width = $w;
        $this->height = $h;
        $this->length = $l;
        self::$count++;
    }
    public static function staticFunction(){
        //var_dump($this->width);
        var_dump(static::class);
        var_dump(self::class);
    }

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
    public function getWidth(){
        return $this->width;
    }
    public function setWidth($width){
        if($width > 0 && is_numeric($width)){
            $this->width = $width;
        }
    }
}

$box1 = new Box(10,10,10);


var_dump($box1->volume());

$box3 = new Box();
// Kui lihtsalt võrduma panna, siis on by-reference, aga nii on täiesti oma objekt.
$box2 = clone $box1;
$box2->setWidth(50);


class MetalBox extends Box{
    public $material = 'metal';
    public $massPerUnit = 2;

    public function mass(){
        return $this->volume() * $this->massPerUnit;
    }
}

trait Colorful {
    private $color;

    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
}

$metalBox = new MetalBox(2,3,4);
var_dump($metalBox);
var_dump($metalBox->volume());
var_dump($metalBox->mass());