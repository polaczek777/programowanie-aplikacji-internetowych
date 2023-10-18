<?php
class Fruit{

    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
    }
    function __destruct(){
        echo "the fruit is {$this->name}.";
    }
}
$apple=new Fruit("Apple","Green");
?>