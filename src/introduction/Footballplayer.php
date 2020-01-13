<?php

class Footballplayer
{
    public $name;
    public $position;

    public function __construct($name, $position)
    {
        $this-> name = $name;
        $this-> position= $position;
    }
}

$playerA = new Footballplayer('Marco Reus', 'Striker');
$playerB =new Footballplayer('Axel Witsel', 'Midfiled');

var_dump($playerA->name);
var_dump($playerB);
