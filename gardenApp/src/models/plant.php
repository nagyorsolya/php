<?php

class Plant
{
  public $waterAmount = 0;
  public $color;
  function __construct($color)
  {
    $this->color = $color;
   }
   function getType(){
     return static::class;
   }
}
