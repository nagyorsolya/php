<html>

<body>
  <?php
  // Write a program that stores 3 sides of a cuboid as variables (floats)
  // The program should write the surface area and volume of the cuboid like:
  //
  // Surface Area: 600
  // Volume: 1000

function calculateSurfaceAndArea($length, $width, $height){
  $surface = 2*($length + $width + $height);
  $volume = $length * $width * $height;

  return "The cuboid's surface is $surface 2cms and its volume is $volume 3cms.";
}

echo calculateSurfaceAndArea(12, 4, 6);

  ?>
</body>

</html>