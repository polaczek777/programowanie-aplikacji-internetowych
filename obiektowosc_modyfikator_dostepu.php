<?php
class Fruit1{
    public $name;
    protected $color;
    public $weight;
}

$mango=new Fruit1();
$mango->name='mango';//ok
$mango->color='yellow';//error
$mango->weight='300';//error
?>