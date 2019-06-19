<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Garden App</title>
</head>

<body>
  <h1>Welcome to your garden</h1>
  <?php

  require_once '..\models\garden.php';
  require_once '..\models\tree.php';
  require_once '..\models\flower.php';

  $newGarden = new Garden();
  $tree1 = new Tree("green");
  $flower1 = new Flower("purple");
  $newGarden->addPlant($tree1);
  $newGarden->addPlant($flower1);

  echo "<p> Your garden has " . sizeof($newGarden->plants) . " plants. </p>";
  echo  "<h4> After watering with 10liters of water: </h4>";
  echo $newGarden->waterPlants(10) . " <br>";
  echo $tree1->waterAmount . "<br>";
  echo $flower1->waterAmount;

  ?>
</body>

</html>