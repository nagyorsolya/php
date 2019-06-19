<?php

class Flower extends Plant
{
  function addWater($waterAmount)
  {
    return $this->waterAmount += ($waterAmount * 0.75);
  }

  function needsWater(){
    if ($this->waterAmount < 5) {
      return "The $this->color flower needs water.";
    }
    return "The $this->color flower doesn't need water.";
  }
}
