<?php

class Garden
{
  public $plants = [];
  function addPlant($plant)
  {
    array_push($this->plants, $plant);
  }
  function waterPlants($waterAmount)
  {
    $plantsToWater = [];
    foreach ($this->plants as $plant) {
      if ($plant->getType() == "Tree" && $plant->waterAmount < 10) {
        array_push($plantsToWater, $plant);
      }
      if ($plant->getType() == "Flower" && $plant->waterAmount < 5) {
        array_push($plantsToWater, $plant);
      }
    }
    foreach ($plantsToWater as $plant) {
      $plant->addWater($waterAmount / (sizeof($plantsToWater)));
    }
    foreach ($this->plants as $plant) {
      echo $plant->needsWater() . "<br>";
    }
  }
}
