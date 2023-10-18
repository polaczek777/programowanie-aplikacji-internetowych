<?php
class Fruit2{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    protected function intro(){
        echo "this fruit is {$this->name} and the color is {$this->color}.";
    }
}
?>