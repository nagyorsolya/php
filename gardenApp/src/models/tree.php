<?php

include 'plant.php';

class Tree extends Plant
{
  function addWater($waterAmount)
  {
    return $this->waterAmount += ($waterAmount * 0.4);
  }

  function needsWater()
  {
    if ($this->waterAmount < 10) {
      return "The $this->color tree needs water.";
    }
    return "The $this->color tree doesn't need water.";
  }
}

//  $tree1 = new Tree("green");
//  echo $tree1->getType();
